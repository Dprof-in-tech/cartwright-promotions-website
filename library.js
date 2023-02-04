function search() {
    var input = document.querySelector('.search').value;
    var books = document.querySelectorAll('.b-right .books section .book h1');
    var matchedBooks = [];
    const searchBox = document.querySelector('.searchbox');
    const search = document.querySelector('.searchbutton');

    search.addEventListener('click', ()=>{
        searchBox.classList.add("show");
    });


    for (var i = 0; i < books.length; i++) {
        if (books[i].innerText.toLowerCase().indexOf(input.toLowerCase()) > -1) {
            matchedBooks.push(books[i].parentElement);
        }
    }
    
    for (var i = 0; i < books.length; i++) {
        books[i].parentElement.style.display = 'none';
    }
    for (var i = 0; i < matchedBooks.length; i++) {
        matchedBooks[i].style.display = 'block';
    }
}
