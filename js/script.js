document.addEventListener("DOMContentLoaded", function () {
    let selectedSeats = [];
    let count = 0;
    let amount = 0;

    let seats = document.querySelectorAll(".seat");
    seats.forEach((seat) => {
        seat.addEventListener("click", () => {
            const seatId = seat.id;

            if(!seat.classList.contains("booked")){
                if (!selectedSeats.includes(seatId)) {
                    selectedSeats.push(seatId);
                    seat.classList.toggle("grr");
                    count += 1;
                    amount += 200;
                } else {
                    const index = selectedSeats.indexOf(seatId);
                    if (index > -1) {
                        selectedSeats.splice(index, 1);
                    }
                    seat.classList.toggle("grr");
                    count -= 1;
                    amount -= 200;
                }
            }
            document.querySelector(".amount").textContent = amount;
            document.querySelector(".count").textContent = count;
        });
    });

    // Add an event listener to the "Book" button
    let bookButton = document.getElementById("btn");
    bookButton.addEventListener("click", () => {
        // Collect "name" and "contact" values from the form
        let name = document.getElementById("name").value;
        let contact = document.getElementById("contact").value;
        let time = document.querySelector('input[name="time"]:checked').value;

        let bookingData = {
            "name": name,
            "contact": contact,
            "selectedSeats": selectedSeats,
            "amount": amount,
            "time": time,
        };

        // Make an asynchronous POST requests
        fetch('seats.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(bookingData),
        });
    });
    fetch('book.php')
    .then(response => response.json())
    .then((json)=>{
        json.forEach(el=>{
            document.getElementById(el).classList.add("booked");
        })
    })
});
