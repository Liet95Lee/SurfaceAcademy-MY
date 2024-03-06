// Define combined events array
const combinedEvents = [
    { image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "13/01/2024", date: new Date(Date.UTC(2023, 12, 13, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "24/02/2024", date: new Date(Date.UTC(2024, 1, 24, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "9/03/2024", date: new Date(Date.UTC(2024, 2, 9, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "13/04/2024", date: new Date(Date.UTC(2024, 3, 13, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "11/05/2024", date: new Date(Date.UTC(2024, 4, 11, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "8/06/2024", date: new Date(Date.UTC(2024, 5, 8, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "13/07/2024", date: new Date(Date.UTC(2024, 6, 13, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "10/08/2024", date: new Date(Date.UTC(2024, 7, 10, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "14/09/2024", date: new Date(Date.UTC(2024, 8, 14, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "12/10/2024", date: new Date(Date.UTC(2024, 9, 12, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "9/11/2024", date: new Date(Date.UTC(2024, 10, 9, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Vasari", name: "Bengkel Vasari", time: "9 AM", upDate: "14/12/2024", date: new Date(Date.UTC(2024, 11, 14, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "27/01/2024", date: new Date(Date.UTC(2023, 12, 27, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "23/03/2024", date: new Date(Date.UTC(2024, 2, 23, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "27/04/2024", date: new Date(Date.UTC(2024, 3, 27, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
	{ image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "25/05/2024", date: new Date(Date.UTC(2024, 4, 25, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "22/06/2024", date: new Date(Date.UTC(2024, 5, 22, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "27/07/2024", date: new Date(Date.UTC(2024, 6, 27, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "24/08/2024", date: new Date(Date.UTC(2024, 7, 24, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "28/09/2024", date: new Date(Date.UTC(2024, 8, 28, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "26/10/2024", date: new Date(Date.UTC(2024, 9, 26, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "23/11/2024", date: new Date(Date.UTC(2024, 10, 23, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
    { image: "Cebos", name: "Bengkel Cebos/Loggia", time: "9 AM", upDate: "28/12/2024", date: new Date(Date.UTC(2024, 11, 28, -8, 0, 0)), placeName: "A-G-6, Emerald Avenue, Jalan PS 11, Prima Selayang, 68100 Batu Caves, Selangor" },
];

// Sort combined events array by date
combinedEvents.sort((a, b) => a.date - b.date);

// Get the HTML element where the details will be displayed
const detailsElement = document.getElementById("ChooseOne");

// Find the next three events that haven't passed yet and are more than 14 days away
const upcomingEvents = [];
for (let i = 0; i < combinedEvents.length; i++) {
    const timeDifference = combinedEvents[i].date - new Date();
    const daysRemaining = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

    if (daysRemaining > 14) {
        upcomingEvents.push(combinedEvents[i]);

        // Break when we have found the next three upcoming events
        if (upcomingEvents.length === 3) {
            break;
        }
    }
}

// If there are no upcoming events more than 14 days away, display a message
if (upcomingEvents.length === 0) {
    detailsElement.innerHTML = "No upcoming events away";
} else {
    // Display the details of the next three upcoming events in the HTML element
    detailsElement.innerHTML = upcomingEvents.map((event, index) => {
        return `
        <div class="list">
        <img class="pointMap" src="assets/images/Maps-Point.png">
        <div class="image">
            <img src="assets/images/Course-${event.image}.jpg">
        </div>
        <div class="details">
        <div class="theme"><span class="head">Topik：</span><span>${event.name}</span></div>
            <div class="time"><span class="head">Masa：</span><span>${event.time}</span></div>
            <div class="date"><span class="head">Tarikh：</span><span>${event.upDate}</span></div>
            <div class="address"><span class="head">Lokasi：</span><span>${event.placeName}</span></div></div>
        <div class="buttn">
            <a href="https://forms.gle/9jQzh3g8EhpMy2qu9" target="_blank" rel="noopener noreferrer"><span>PENDAFTARAN PERCUMA SEKARANG</span>
            </a>
        </div>
    </div>`;
    }).join('');
}