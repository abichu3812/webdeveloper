
function updateServerWithTime(d,h, m, s) {
    const formData = new FormData();
    formData.append('username', 'JohnDoe');
    formData.append('email', '@abel');
    formData.append('days', d);
    formData.append('hours', h);
    formData.append('minutes', m);
    formData.append('seconds', s);

    fetch('/process_frame/', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRFToken': '{{ csrf_token|default_if_none:"" }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log('Face recognition result:', data);
        //document.getElementById("demo5").innerHTML = data.name;
    })
    .catch(error => console.error('Error:', error));
}

document.addEventListener("DOMContentLoaded", function() {
    // Use the countdownData object directly
    var days = countdownData.day;
    var hours = countdownData.hour;
    var minutes = countdownData.minute;
    var seconds = countdownData.second;

    // Calculate the end time based on current time and countdown values
    var endTime = new Date();
    endTime.setDate(endTime.getDate() + days);
    endTime.setHours(endTime.getHours() + hours);
    endTime.setMinutes(endTime.getMinutes() + minutes);
    endTime.setSeconds(endTime.getSeconds() + seconds);

    // Function to update the countdown
    function updateCountdown() {
        var now = new Date();
        var timeDifference = endTime - now;

        if (timeDifference <= 0) {
            document.getElementById('countdown').innerHTML = "Countdown finished!";
            clearInterval(countdownInterval);
            return;
        }

        var daysLeft = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        var hoursLeft = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutesLeft = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        var secondsLeft = Math.floor((timeDifference % (1000 * 60)) / 1000);
        if(daysLeft > 0){
            document.getElementById('daysleft').innerHTML =
                daysLeft + "  Days " ;
            document.getElementById('hmsleft').innerHTML =
                hoursLeft + ": " +
                minutesLeft + ": " +
                secondsLeft + ":  left";
        }
        else if(daysLeft <= 0)
        {
             document.getElementById('hmsleft').innerHTML =''
             document.getElementById('daysleft').innerHTML =
                hoursLeft + " : " +
                minutesLeft + " : " +
                secondsLeft + " left ";

        }

        else if(minutesLeft <=0){
        document.getElementById('daysleft').innerHTML ='';
        document.getElementById('secondsleft').innerHTML =
                second + " seconds left ";
        }
        else{
        document.getElementById('daysleft').innerHTML ='TIME UP';}
            updateServerWithTime(daysLeft,hoursLeft,minutesLeft,secondsLeft)
    }

    // Update the countdown every second
    var countdownInterval = setInterval(updateCountdown, 1000);
});
