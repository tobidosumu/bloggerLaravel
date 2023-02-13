//  IIFE (Immediately Invoked Function Expression) so that the variables and functions inside them do not interfere with the global scope.

(function() { // Header shadow function
  window.addEventListener("scroll", function() {
    const [red, green, blue] = [242, 254, 255];
    const header = document.querySelector("header");
  
    const y = 1 + (window.scrollY || window.pageYOffset) / 200;
    const [r, g, b] = [red / y, green / y, blue / y].map(Math.ceil);
    header.style.boxShadow = `0 0 4px rgb(${r}, ${g}, ${b})`;
  });
})();

// Retracts Create Post button tooltip
(function() {
  window.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
      let tooltip = document.getElementById('createPostTooltip');
      tooltip.classList.add('hide');
    }, 3000);
  });
})();

const autoResizeTextarea = () => {
  const textareas = document.querySelectorAll("#expandable-textarea"); // Post comments
  const postBtnWrappers = document.querySelectorAll("#postBtnWrapper");

  textareas.forEach((textarea, index) => {
    textarea.addEventListener("input", () => {
      if (textarea.scrollHeight <= 70) {
        textarea.style.height = "20px";
        textarea.style.height = textarea.scrollHeight + "px";
      } else {
        textarea.style.height = "70px";
      }

      const postBtnWrapper = postBtnWrappers[index];
      if (textarea.value) {
        postBtnWrapper.style.color = "#eb253f";
        postBtnWrapper.style.background = "#f4f4f5";
      } else {
        postBtnWrapper.style.color = "#4fe3b7c4";
        postBtnWrapper.style.background = "none";
      }
    });
  });
}

// Header nav profile dropdown
const revealProfileDropdown = () => {
  // Get the dropdown element
  let dropdown = document.querySelector("#profileDropdown");

  // Toggle the "display" style of the dropdown element
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }

  // Add a click event listener to the document to hide dropdown when any element on the page is clicked
  document.addEventListener("click", function (event) {
    // Get the dropdown element
    let dropdown = document.querySelector("#profileDropdown");
  
    // Check if the target of the click event is not the dropdown or a descendant of the dropdown
    if (!event.target.closest(".profile")) {
      // If the target is not the dropdown or a descendant of the dropdown, hide the dropdown
      dropdown.style.display = "none";
    }
  });
}

const replaceLikeIcon = (icon) => { 
  if (icon.classList.contains('bi-heart')) {
    icon.classList.remove('bi-heart');
    icon.classList.add('bi-heart-fill');
    icon.style.color = 'red';
  } else {
    icon.classList.remove('bi-heart-fill');
    icon.classList.add('bi-heart');
    icon.style.color = 'initial';
  }
}

const toggleSearchDropdown = () => {
  const searchDropDown = document.querySelector('.searchDropDown');
  const searchIcon = document.querySelector('.searchIcon');
  const searchField = document.querySelector('input[name="search"]');

  if (searchIcon.classList.contains('bi-search')) {
    searchDropDown.style.display = "block";
    searchIcon.classList.remove('bi-search');
    searchIcon.classList.add('bi-x-lg');
    searchField.focus();
  } else {
    searchDropDown.style.display = "none";
    searchIcon.classList.remove('bi-x-lg');
    searchIcon.classList.add('bi-search');
  }
}

const hideSuccessMessage = () => {
  document.getElementById("hideSuccessMessage").style.display = "none";
}

let postModalBackground = document.getElementById('postModalBackground');

const openPostModal = () => {
  document.getElementById('postModal').style.display = 'block';
  postModalBackground.style.display = 'block';
}

const closePostModal = () => {
  document.getElementById('postModal').style.display = 'none';
  postModalBackground.style.display = 'none';
}
