var target = document.head;
var observer = new MutationObserver(function(mutations) {
    for (var i = 0; mutations[i]; ++i) {                    // notify when script to hack is added in HTML head
        if (mutations[i].addedNodes[0].nodeName == "SCRIPT" && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)) {
            var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
            if (str) {
                if (str[0][str[0].length - 1] == '&') {
                    str = str[0].substring(10, str[0].length - 1);
                } else {
                    str = str[0].substring(10);
                }
                var split = str.split(".");
                var object = split[0];
                var method = split[1];
                window[object][method] = null; 
            }
            observer.disconnect();
        }
    }
});
var config = { attributes: true, childList: true, characterData: true }
observer.observe(target, config);