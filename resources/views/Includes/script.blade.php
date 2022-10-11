<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script>
    var btnContainer = document.getElementById("navbarNav");

    var btns = btnContainer.getElementsByClassName("nav-link");

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
<script>
    const search = document.querySelector('.search')
    const btn = document.querySelector('.btns')
    const input = document.querySelector('.input')
    btn.addEventListener('click', () => {
        search.classList.toggle('active')
        input.focus()
    })
</script>
