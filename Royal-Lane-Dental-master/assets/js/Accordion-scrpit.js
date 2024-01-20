const items1 = document.querySelectorAll(".retailrow .accordion button");

function toggleAccordion1() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items1.length; i++) {
    items1[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}


items1.forEach(item1 => item1.addEventListener('click', toggleAccordion1));