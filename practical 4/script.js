// Array of events
const events = [
  { name: "Hackathon 2025", category: "Tech", date: "15 Dec 2025" },
  { name: "AI Workshop", category: "Workshop", date: "10 Jan 2026" },
  { name: "Cultural Fest", category: "Cultural", date: "25 Jan 2026" },
  { name: "Cloud Summit", category: "Tech", date: "5 Feb 2026" },
  { name: "Robotics Bootcamp", category: "Workshop", date: "12 Mar 2026" },
];

// Function to display events
function displayEvents(eventArray) {
  const list = document.getElementById("eventList");
  list.innerHTML = ""; // clear existing

  if (eventArray.length === 0) {
    list.innerHTML = "<p>No events found.</p>";
    return;
  }

  eventArray.forEach(event => {
    const card = document.createElement("div");
    card.classList.add("event-card");

    card.innerHTML = `
      <h3>${event.name}</h3>
      <p><b>Category:</b> ${event.category}</p>
      <p><b>Date:</b> ${event.date}</p>
    `;
    list.appendChild(card);
  });
}

// Function to filter based on search & category
function filterEvents() {
  const searchText = document.getElementById("searchInput").value.toLowerCase();
  const selectedCategory = document.getElementById("categoryFilter").value;

  const filtered = events.filter(event => {
    const matchesName = event.name.toLowerCase().includes(searchText);
    const matchesCategory = selectedCategory === "All" || event.category === selectedCategory;
    return matchesName && matchesCategory;
  });

  displayEvents(filtered);
}

// Display all events on load
window.onload = () => displayEvents(events);
