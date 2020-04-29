$('#search').submit(function (e) {
    e.preventDefault();
    window.location.href = "/recherche/"+e.target.elements[0].value;
});
