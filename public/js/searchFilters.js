function projectSearch() {
    // Declare variables
    var input, filter, ul, li, i, p;
    input = document.getElementById('projectSearch');
    ul = document.getElementById("projectlist");
    li = ul.getElementsByTagName('li');
    filter = input.value.toUpperCase();

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        p = li[i].getElementsByTagName("p")[0];
        if (p.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function clientSearch() {
    // Declare variables
    var input, filter, ul, li, i, p;
    input = document.getElementById('clientSearch');
    ul = document.getElementById("clientlist");
    li = ul.getElementsByTagName('li');
    filter = input.value.toUpperCase();

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        p = li[i].getElementsByTagName("p")[0];
        if (p.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}