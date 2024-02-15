document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementById("calendar-container");

    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    const daysOfWeek = [ "M", "T", "W", "T", "F","S", "S"];

    const currentDate = new Date();
    let selectedDate = currentDate;

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        const firstDayOfMonth = new Date(year, month, 1);
        const lastDayOfMonth = new Date(year, month + 1, 0);

        container.innerHTML = `
            <div id="calendar-header">${months[month]} ${year}</div>
            <div id="calendar-days">${daysOfWeek.map(day => `<div class="day">${day}</div>`).join("")}</div>
            <div id="calendar-dates">${generateCalendarDates(firstDayOfMonth, lastDayOfMonth)}</div>
        `;

        highlightToday();
        highlightSelectedDate();
    }

    function generateCalendarDates(start, end) {
        const dates = [];
        const today = new Date();

        for (let i = 1; i <= end.getDate(); i++) {
            const date = new Date(start.getFullYear(), start.getMonth(), i);

            const isToday = date.toDateString() === today.toDateString();
            const isSelected = date.toDateString() === selectedDate.toDateString();

            dates.push(`
                <div class="date${isToday ? " today" : ""}${isSelected ? " selected" : ""}" onclick="selectDate('${date.toISOString()}')">
                    ${i}
                </div>
            `);
        }

        return dates.join("");
    }

    function highlightToday() {
        const todayElements = container.querySelectorAll(".today");
        todayElements.forEach(element => element.classList.remove("today"));

        const today = container.querySelector(`.date.today`);
        if (today) today.classList.add("today");
    }

    function highlightSelectedDate() {
        const selectedElements = container.querySelectorAll(".selected");
        selectedElements.forEach(element => element.classList.remove(".selected"));

        const selectedDateElement = container.querySelector(`.date.selected`);
        if (selectedDateElement) selectedDateElement.classList.add(".selected");
    }

    window.selectDate = function(dateString) {
        selectedDate = new Date(dateString);
        renderCalendar();
    };

    renderCalendar();
});
