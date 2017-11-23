var x = "X", o = "O";
var current = x;
board.onclick = function(e) {
    var td = getClickedElement(e);
    if (td && !td.clicked) {
        td.clicked = true;
        td.innerText = current;
        current = current==x?o:x;
    }
};
