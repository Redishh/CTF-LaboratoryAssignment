function changeImage(){
    let img = document.querySelector("#pet")
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const ID = urlParams.get('ID');
    img.setAttribute("src", "pet" + ID + ".jpeg");
}


document.cookie = "expires=Sun, 1 Janurary 2030 12:00:00 UTC;"
