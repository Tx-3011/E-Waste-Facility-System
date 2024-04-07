// Your list of e-waste facts
const facts = [
    "A single discarded laptop can contain enough mercury to contaminate over 15,000 gallons of water.",
    "E-waste is the fastest-growing waste stream in the world.",
    "The burning of e-waste releases toxic chemicals into the air, harming human health and the environment.",
    "Improper e-waste disposal can lead to soil and water contamination.",
    "Recycling e-waste helps conserve resources and reduce pollution." 
];

// Function to select a random fact
function displayRandomFact() {
    const randomIndex = Math.floor(Math.random() * facts.length);
    const selectedFact = facts[randomIndex];
    document.getElementById('fact-area').textContent = "Did you know? " + selectedFact;
}

// Call the function when the page loads
window.onload = displayRandomFact;
