// Define an array of upcomingevent (in UTC time)
const upcomingevent = [
    { name: "13/01/2024 - 7 PM", date: new Date(Date.UTC(2023, 12, 13, +11, 0, 0)) },
    { name: "27/01/2024 - 7 PM", date: new Date(Date.UTC(2023, 12, 27, +11, 0, 0)) },

    { name: "3/02/2024 - 7 PM", date: new Date(Date.UTC(2024, 1, 3, +11, 0, 0)) },
    { name: "24/02/2024 - 7 PM", date: new Date(Date.UTC(2024, 1, 24, +11, 0, 0)) },

    { name: "9/03/2024 - 7 PM", date: new Date(Date.UTC(2024, 2, 9, +11, 0, 0)) },
    { name: "23/03/2024 - 7 PM", date: new Date(Date.UTC(2024, 2, 23, +11, 0, 0)) },

    { name: "13/04/2024 - 7 PM", date: new Date(Date.UTC(2024, 3, 13, +11, 0, 0)) },
    { name: "27/04/2024 - 7 PM", date: new Date(Date.UTC(2024, 3, 27, +11, 0, 0)) },

    { name: "11/05/2024 - 7 PM", date: new Date(Date.UTC(2024, 4, 11, +11, 0, 0)) },
    { name: "25/05/2024 - 7 PM", date: new Date(Date.UTC(2024, 4, 25, +11, 0, 0)) },

    { name: "8/06/2024 - 7 PM", date: new Date(Date.UTC(2024, 5, 8, +11, 0, 0)) },
    { name: "22/06/2024 - 7 PM", date: new Date(Date.UTC(2024, 5, 22, +11, 0, 0)) },

    { name: "13/07/2024 - 7 PM", date: new Date(Date.UTC(2024, 6, 13, +11, 0, 0)) },
    { name: "27/07/2024 - 7 PM", date: new Date(Date.UTC(2024, 6, 27, +11, 0, 0)) },

    { name: "10/08/2024 - 7 PM", date: new Date(Date.UTC(2024, 7, 10, +11, 0, 0)) },
    { name: "24/08/2024 - 7 PM", date: new Date(Date.UTC(2024, 7, 24, +11, 0, 0)) },

    { name: "14/09/2024 - 7 PM", date: new Date(Date.UTC(2024, 8, 14, +11, 0, 0)) },
    { name: "28/09/2024 - 7 PM", date: new Date(Date.UTC(2024, 8, 28, +11, 0, 0)) },

    { name: "12/10/2024 - 7 PM", date: new Date(Date.UTC(2024, 9, 12, +11, 0, 0)) },
    { name: "26/10/2024 - 7 PM", date: new Date(Date.UTC(2024, 9, 26, +11, 0, 0)) },

    { name: "9/11/2024 - 7 PM", date: new Date(Date.UTC(2024, 10, 9, +11, 0, 0)) },
    { name: "23/11/2024 - 7 PM", date: new Date(Date.UTC(2024, 10, 23, +11, 0, 0)) },

    { name: "14/12/2024 - 7 PM", date: new Date(Date.UTC(2024, 11, 14, +11, 0, 0)) },
    { name: "28/12/2024 - 7 PM", date: new Date(Date.UTC(2024, 11, 28, +11, 0, 0)) },
];

// Get the HTML element where the countdown will be displayed
const countdownElement = document.getElementById("HomeCountDown");

// Update the countdown every second
setInterval(() => {
    // Get the current time (in UTC time)
    const now = new Date();

    // Find the next event that hasn't passed yet and is more than 14 days away
    let nextEvents = null;
    for (let i = 0; i < upcomingevent.length; i++) {
        const timeDifference = upcomingevent[i].date - now;
        const daysRemaining = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

        if (daysRemaining > 14) {
            nextEvents = upcomingevent[i];
            break;
        }
    }

    // If there are no upcoming events more than 14 days away, display a message
    if (nextEvents === null) {
        countdownElement.innerHTML = "No upcoming event more than 14 days away";
        return;
    }

    // Calculate the difference between now and the next event
    const diff = nextEvents.date.getTime() - now.getTime();

    // Calculate the remaining days, hours, minutes, and seconds
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

    // Display the remaining time in the HTML element
    countdownElement.innerHTML = `<div class="CountDownWidget">
    <div class="title">Bengkel Seterusnya: <div class="nextEvents">${nextEvents.name}</div></div>
    <div class="eventTime">
        <div class="list">
            <div class="count"><span>${days}</span></div>
            <div class="text">DAY(S)</div>
        </div>
        <div class="list">
            <div class="count"><span>${hours}</span></div>
            <div class="text">HOUR(S)</div>
        </div>
        <div class="list"><div class="count"><span>${minutes}</span></div><div class="text">MINUTE(S)</div></div>
        <div class="list"><div class="count"><span>${seconds}</span></div><div class="text">SECOND(S)</div></div></div></div>`;
}, 500);