let table1 = document.getElementById("kisiler");
const infoPanel = document.getElementById("info");

let rows = document.querySelectorAll("#kisiler tr");

infoPanel.textContent = "table1.length = " + table1.length;

// renklerin değişimini sağlayan fonksiyon
// tek sayı olan satırlar mavi
function paintColor(rows) {
    for (let i = 1; i < rows.length; i++) {
        if ((i % 2) == 0) {
            rows[i].style.backgroundColor = "#c4ffd3";
            // gelen arraydeki element will be white
        } else {
            rows[i].style.backgroundColor = "#ffc4d2";
        }
    }
}

paintColor(rows);
