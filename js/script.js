document.addEventListener("DOMContentLoaded", function() {
    let seats = document.querySelectorAll(".seat"); // Select all seat divs
    let count = 0;
    let amount = 0;
  
    seats.forEach(seat => {
      seat.addEventListener("click", () => {
        seat.classList.toggle("grr"); // Toggle the "grr" class
  
        if (seat.classList.contains("grr")) {
          // Seat selected
          count += 1;
          amount += 200;
        } else {
          // Seat deselected
          count -= 1;
          amount -= 200;
        }
  
        document.querySelector(".amount").textContent = amount;
        document.querySelector(".count").textContent = count;
      });
    });
  });
  