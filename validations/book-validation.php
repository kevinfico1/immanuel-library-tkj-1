<?php
require_once __DIR__ . "/../repositories/book-repository.php";
require_once __DIR__ . "/../repositories/category-repository.php";
require_once __DIR__ . "/../repositories/author-repository.php";
function getbookRequest($request) {
   
    return [
        "title" => trim(htmlspecialchars($request['title'])),
        "isbn" => trim(htmlspecialchars($request['isbn'])),
        "year" => trim(htmlspecialchars($request['year'])),
        "stock" => trim(htmlspecialchars($request['stock'])),
        "description" => trim(htmlspecialchars($request['description'])),
        "category_id" => trim(htmlspecialchars($request['category_id'] )),
        "author_ids" => $request['author_ids'] ?? [],
    ];
}

function validateBook($request, $ignoreBookId = 0) {
    $errors = [];

    if ($request['title'] === "") {
        $errors['title'] = "judul buku wajib diisi";
    } elseif (mb_strlen($request['title']) > 100) {
        $errors['title'] = "judul buku tidak boleh lebih dari 100 karakter";
    }

    if ($request['isbn']== ''){
        $errors['isbn'] = "ISBN wajib diisi";
    } elseif (isIsbnTaken($request['isbn'], $ignoreBookId)) {
        $errors['isbn'] = "ISBN sudah terdaftar sebelumnya";
    }

    if ($request['year']== ''){
        $errors['year'] = "Tahun terbit wajib diisi";
    }elseif (!is_int(intval($request['year']))) {
        $errors['year'] = "Tahun terbit wajib di isi dengan angka";
    }

    if ($request['stock']== ''){
        $errors['stock'] = "Stok wajib diisi";
    }elseif (!is_int(intval($request['stock']))) {
        $errors['stock'] = "Stok wajib di isi dengan angka";
    }

    if ($request['category_id']== ''){
        $errors['category_id'] = "Kategori wajib dipilih";
    }elseif(!isCategoryExists($request['category_id'])) {
        $errors['category_id'] = "Kategori tidak ditemukan";
    }


    if ($request['description']== ''){
        $errors['description'] = "Deskripsi buku wajib diisi";
    }elseif (mb_strlen($request['description']) > 100) {
        $errors['description'] = "Deskripsi buku tidak boleh lebih dari 100 karakter";
    }

    if (count($request['author_ids']) < 1) {
        $errors['author_ids'] = "penulis buku wajib dipilih";
    }else {
        $author = getAuthors();
        $validAuthorIds = array_column($author, 'id');
        foreach ($request['author_ids'] as $authorId) {
            if (!in_array($authorId, $validAuthorIds)) {
                $errors['author_ids'] = "ada penulis buku yang di pilih tidak valid";
            }
        }
    }

    return $errors;
}

?>