document.addEventListener('DOMContentLoaded', function() {
    //  JavaScript code here
  

const ul = document.querySelector('.usefull-links');

// Define an array of link objects for cleaner data
const links = [
  { href: 'index.html', text: 'Home' },
  { href: 'about-pandit-vijay.html', text: 'Master Vijay Ram' },
  { href: 'astrology-services.html', text: 'Astrology Services' },
  { href: 'Astrologer-in-Canada.html', text: 'Astrologer Canada' },
  { href: 'Astrologer-in-Usa.html', text: 'Astrologer USA' },
  { href: 'contact-us.html', text: 'Contact Us' },
  { href: 'locations.html', text: 'Locations' },
  { href: 'Gallery.html', text: 'Gallery' },
  { href: 'Trust-and-Foundation.html', text: 'Trust and Foundation' },
  { href: 'https://mastervijayram.blogspot.com', text: 'Blogs' },
];

// Loop through the links array and create list items
links.forEach(link => {
  const li = document.createElement('li');
  const a = createLink(link.href, link.text);
  li.appendChild(a);
  ul.appendChild(li);
});

// Helper function to create links (same as before)
function createLink(href, text) {
  const link = document.createElement('a');
  link.href = href;
  link.textContent = text;
  const icon = document.createElement('i');
  icon.classList.add('fa', 'fa-angle-right', 'aria-hidden="true"');  // Assuming Font Awesome is included
  link.insertBefore(icon, link.firstChild);  // Insert icon before text
  return link;
}


   usefullLinks2();
function usefullLinks2(){ 
    // alert("he;")
    const ul = document.querySelector('.usefull-links2');

// Define an array of link objects for cleaner data
const links = [
    { href: 'get-your-ex-back.html', text: 'Get your ex back' },
    { href: 'remove-black-magic.html', text: 'Remove Black Magic' },
    { href: 'psychic-reader.html', text: 'Psychic Reader' },
    { href: 'Evil-energy-Removal.html', text: 'Evil energy Removal' },
    { href: 'love-psychic.html', text: 'Love Psychic' },
    { href: 'indian-astrologer.html', text: 'Indian Astrologer' },
    { href: 'spiritual-healer.html', text: 'Spiritual Healer' },
    { href: 'vashikaran-specialist.html', text: 'Vashikaran Specialist' },
    { href: 'face-reader.html', text: 'Face Reader' },
    { href: 'palm-reading.html', text: 'Palm Reading' },
    { href: 'horoscope-reading.html', text: 'Horoscope Reading' },
    { href: 'lotto-max-prediction.html', text: 'Lotto Max Prediction' },
    { href: 'indian-god-prayer.html', text: 'Indian God Prayer' },
    { href: 'job-and-career-solution.html', text: 'Job And Career' },
    { href: 'business-problem-solution.html', text: 'Business Problem' },
    { href: 'husband-wife-problem-solution.html', text: 'Husband Wife Problem' },
    { href: 'money-financial-problem-solution.html', text: 'Money Financial Problem' },
    { href: 'childless-couples-solution.html', text: 'Childless Couples' },
    { href: 'marriage-problem-solution.html', text: 'Marriage Problem' }
  ];

// Loop through the links array and create list items
links.forEach(link => {
  const li = document.createElement('li');
  const a = createLink(link.href, link.text);
  li.appendChild(a);
  ul.appendChild(li);
});

// Helper function to create links (same as before)
function createLink(href, text) {
  const link = document.createElement('a');
  link.href = href;
  link.textContent = text;
  const icon = document.createElement('i');
  icon.classList.add('fa', 'fa-angle-right', 'aria-hidden="true"');  // Assuming Font Awesome is included
  link.insertBefore(icon, link.firstChild);  // Insert icon before text
  return link;
}
 } 

});  



// Append the ul to the desired location in your HTML (optional)
// document.body.appendChild(ul);  // Example: Append to body