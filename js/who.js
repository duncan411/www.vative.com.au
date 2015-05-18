var AcNo = 0;
var LH = 0;
var docLoaded = window.setInterval(function () {
    if (document.readyState === "complete") {
        window.clearInterval(docLoaded);
        ProcessWhoIsEvents();
    }
}, 100);
function ProcessWhoIsEvents() {
    if (whoparam) {
        for (var i = 0; i < whoparam.length; i++) {
            var func = whoparam[i];
            switch (func[0]) {
                case 'AcNo':
                    AcNo = func[1];
                    break;
                case 'SendHit':
                    SendHit(func[1]);
                    break;
                default:
            }
        }
        whoparam = null;
    }
}

function SendHit() {
    try {
        var r = encodeURIComponent(document.referrer);
        var w = screen.width;
        var h = screen.height;
        var i = document.createElement("img");
        var u = window.location.href;
        var p = u.split('/')[0];
        i.src = p + "//dashboard.whoisvisiting.com/who.ashx?Type=Hit&Data=" + w + "|" + h + "|" + r + "|" + AcNo + "|" + encodeURIComponent(u);
        i.style.display = 'none';
        document.body.appendChild(i);
    } catch (e) {
    }
}
