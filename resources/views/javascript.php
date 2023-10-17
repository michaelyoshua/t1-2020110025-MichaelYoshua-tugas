// Objek buku
const books = [
    { title: "Judul Buku 1", author: "Penulis 1", year: 2020 },
    { title: "Judul Buku 2", author: "Penulis 2", year: 2019 },
    { title: "Judul Buku 3", author: "Penulis 3", year: 2021 }
];

// Fungsi untuk menampilkan buku
function displayBooks() {
    const bookList = document.getElementById("book-list");
    bookList.innerHTML = "";

    books.forEach(book => {
        const bookCard = document.createElement("div");
        bookCard.classList.add("book");
        bookCard.innerHTML = `
            <h2>${book.title}</h2>
            <p>Penulis: ${book.author}</p>
            <p>Tahun Terbit: ${book.year}</p>
        `;

        bookList.appendChild(bookCard);
    });
}

// Panggil fungsi untuk menampilkan buku
displayBooks();
