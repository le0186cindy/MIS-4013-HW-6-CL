// SweetAlert2

// Show alert button
function showAlert() {
    Swal.fire({
        title: 'Xin Chào!',
        text: 'That is \'hello\' in Vietnamese!',
        icon: 'info',
        confirmButtonText: 'I see!'
    });
}

// Show confirmation box
function showAlert2() {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
            });
        }
    });
}

// Show alert with three buttons
function showAlert3() {
    Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire("Saved!", "", "success");
        } else if (result.isDenied) {
            Swal.fire("Changes are not saved", "", "info");
        }
    });
}

// Moment.js
function parseDateString() {
    const string = document.getElementById('dateString').value;
    var date = moment(string, "YYYY-MM-DD");
    document.getElementById('dateStringOutput').innerText = "Formatted date: " + date.format("MMMM Do YYYY");
}

function momentManipulate() {
    var today = moment();

    var tomorrow = today.add(1, 'days');
    document.getElementById('oneDayAhead').innerText += tomorrow.format("YYYY-MM-DD");

    var one_week_ahead = today.add(1, 'weeks');
    document.getElementById('oneWeekAhead').innerText += one_week_ahead.format("YYYY-MM-DD");

    var one_month_ahead = today.add(1, 'months');
    document.getElementById('oneMonthAhead').innerText += one_month_ahead.format("YYYY-MM-DD");

    var one_month_before = today.subtract(1, 'months');
    document.getElementById('oneMonthBefore').innerText += one_month_before.format("YYYY-MM-DD");
}

function compareDates() {
    const date1 = document.getElementById('date1').value;
    const date2 = document.getElementById('date2').value;
    var mdate1 = moment(date1);
    var mdate2 = moment(date2);

    if (mdate1.isSame(mdate2)) {
        document.getElementById('compareResult').innerText = "They're the same date";
        return;
    }
    if (mdate1.isBefore(mdate2)) {
        document.getElementById('compareResult').innerText = "Date1 is before Date2";
        return;
    }
    if (mdate1.isAfter(mdate2)) {
        document.getElementById('compareResult').innerText = "Date1 is after Date2";
        return;
    }
    document.getElementById('compareResult').innerText = "Invalid date(s)";
}

// Typed.js
// separate file