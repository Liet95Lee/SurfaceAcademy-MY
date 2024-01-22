// Define an array of vasariEvent (in UTC time)
const vasariEvent = [
    { name: "Bengkel Vasari", time: "7 PM", upDate: "13/01/2024", date: new Date(Date.UTC(2023, 12, 13, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "24/02/2024", date: new Date(Date.UTC(2024, 1, 24, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "9/03/2024", date: new Date(Date.UTC(2024, 2, 9, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "13/04/2024", date: new Date(Date.UTC(2024, 3, 13, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "11/05/2024", date: new Date(Date.UTC(2024, 4, 11, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "8/06/2024", date: new Date(Date.UTC(2024, 5, 8, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "13/07/2024", date: new Date(Date.UTC(2024, 6, 13, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "10/08/2024", date: new Date(Date.UTC(2024, 7, 10, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "14/09/2024", date: new Date(Date.UTC(2024, 8, 14, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "12/10/2024", date: new Date(Date.UTC(2024, 9, 12, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "9/11/2024", date: new Date(Date.UTC(2024, 10, 9, -8, 0, 0)) },
    { name: "Bengkel Vasari", time: "7 PM", upDate: "14/12/2024", date: new Date(Date.UTC(2024, 11, 14, -8, 0, 0)) },
];

// Get the HTML element where the countdown will be displayed
const countVasariElement = document.getElementById("countVasari");

// Update the countdown every second
setInterval(() => {
    // Get the current time (in UTC time)
    const now = new Date();

    // Find the next event that hasn't passed yet and is more than 14 days away
    let nextVasariEvent = null;
    for (let i = 0; i < vasariEvent.length; i++) {
        const timeDifference = vasariEvent[i].date - now;
        const daysRemaining = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

        if (daysRemaining > 14) {
            nextVasariEvent = vasariEvent[i];
            break;
        }
    }

    // If there are no upcoming events more than 14 days away, display a message
    if (nextVasariEvent === null) {
        countVasariElement.innerHTML = "No upcoming event away";
        return;
    }

    // Display the remaining time in the HTML element
    countVasariElement.innerHTML = `<div class="theme"><span class="head">Topik：</span><span>${nextVasariEvent.name}</span></div>
    <div class="time"><span class="head">Masa：</span><span>${nextVasariEvent.time}</span></div>
    <div class="date"><span class="head">Tarikh：</span><span>${nextVasariEvent.upDate}</span></div>
    <div class="address"><span class="head">Lokasi：</span><span>A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor</span></div>`;
}, 500);