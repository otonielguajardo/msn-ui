centerAbsolute("msn-window");

function centerAbsolute(absoluteElId) {
    const el = document.getElementById(absoluteElId);
    el.style.left = '50%';
    el.style.top = '50%';
    el.style.transform = 'translate(-50%, -50%)';
}

dragElement("msn-window", "msn-window-header-menu");

function dragElement(draggableElId, draggableAnchorId) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    var draggableEl = document.getElementById(draggableElId);
    var draggableAnchor = document.getElementById(draggableAnchorId);

    console.log(draggableEl,draggableAnchor);

    draggableAnchor.onmousedown = dragMouseDown;

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();

        pos3 = e.clientX;
        pos4 = e.clientY;

        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        pos1 = pos3 - e.clientX;

        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;

        draggableEl.style.top = (draggableEl.offsetTop - pos2) + "px";
        draggableEl.style.left = (draggableEl.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
    }
}