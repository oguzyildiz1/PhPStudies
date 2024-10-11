var elForm = document.getElementById("messageForm");

// choose the form input
// prevent default
// attach event listener


function sendData() {
    console.log("hi");
    var xhr = new XMLHttpRequest();

    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('content').innerHTML = xhr.responseText;
        }
    };

    xhr.open('POST', 'data/contact-data.php', true);

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.send("foo=bar&lorem=ipsum");
}



elForm.addEventListener("submit", function (e) {
    console.log("hi");
    e.preventDefault();
    sendData();
});


/*
const xhr = new XMLHttpRequest();
xhr.open("POST", "/server", true);

// Send the proper header information along with the request
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = () => {
    // Call a function when the state changes.
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Request finished. Do processing here.
    }
};
xhr.send("foo=bar&lorem=ipsum");
*/
// xhr.send(new Int8Array());
// xhr.send(document);