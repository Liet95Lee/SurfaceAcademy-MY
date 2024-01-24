// Define an array of cebosEvent (in UTC time)
const cebosEvent = [
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "27/01/2024", date: new Date(Date.UTC(2023, 12, 27, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "23/03/2024", date: new Date(Date.UTC(2024, 2, 23, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "27/04/2024", date: new Date(Date.UTC(2024, 3, 27, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "25/05/2024", date: new Date(Date.UTC(2024, 4, 25, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "22/06/2024", date: new Date(Date.UTC(2024, 5, 22, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "27/07/2024", date: new Date(Date.UTC(2024, 6, 27, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "24/08/2024", date: new Date(Date.UTC(2024, 7, 24, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "28/09/2024", date: new Date(Date.UTC(2024, 8, 28, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "26/10/2024", date: new Date(Date.UTC(2024, 9, 26, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "23/11/2024", date: new Date(Date.UTC(2024, 10, 23, -8, 0, 0)) },
    { name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "28/12/2024", date: new Date(Date.UTC(2024, 11, 28, -8, 0, 0)) },
];

// Get the HTML element where the countdown will be displayed
const countCebosElement = document.getElementById("countCebos");

// Update the countdown every second
setInterval(() => {
    // Get the current time (in UTC time)
    const now = new Date();

    // Find the next event that hasn't passed yet and is more than 14 days away
    let nextcebosEvents = null;
    for (let i = 0; i < cebosEvent.length; i++) {
        const timeDifference = cebosEvent[i].date - now;
        const daysRemaining = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

        if (daysRemaining > 14) {
            nextcebosEvents = cebosEvent[i];
            break;
        }
    }

    // If there are no upcoming event, display a message
    if (nextcebosEvents === null) {
        countCebosElement.innerHTML = "No upcoming event";
        return;
    }

    // Display the remaining time in the HTML element
    countCebosElement.innerHTML = `<div class="theme"><span class="head">Topik：</span><span>${nextcebosEvents.name}</span></div>
    <div class="time"><span class="head">Masa：</span><span>${nextcebosEvents.time}</span></div>
    <div class="date"><span class="head">Tarikh：</span><span>${nextcebosEvents.upDate}</span></div>
    <div class="address"><span class="head">Lokasi：</span><span>A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor</span></div>`;
}, 500);