<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <style>
        body {
            height: 100vh;
        }

        .pomodoro-title {
            margin-top: 2rem;
            text-align: center;
        }

        input {
            transition: 0.5s ease-in-out;
            margin: 10px 0;
            font-size: 18px;
            padding: 5px;
            background: rgba(0, 0, 0, 0.11);
            border: none;
        }

        button:hover {
            background: var(--color-primary);
            color: var(--color-white);
        }
    </style>
    <link rel="stylesheet" href="../../assets/css/dashboard.css">


</head>

<div class="pomodoro-title">
    <h1 id="header">Cari Buku Favorit Kamu</h1>
    <div class="row">
        <div>
            <input id="search-box" type="text" class="form-control" placeholder="Cari Buku">
            <button id="search" class="btn" onclick="">Search</button>
        </div>
    </div>
</div>
<div class="book-list">
    <h2 class="text-center">Search Result</h2>
    <div id="list-output" class="">
        <div class="row">
            <!-- card  -->

        </div>

    </div>
</div>
</div>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<!-- <script src="../js/bookapi.js"></script> -->
<script>
    $(document).ready(function() {
        var item, tile, author, publisher, bookLink, bookImg;
        var outputList = document.getElementById("list-output");
        var bookUrl = "https://www.googleapis.com/books/v1/volumes?q=";
        var apiKey = "key=AIzaSyDtXC7kb6a7xKJdm_Le6_BYoY5biz6s8Lw";
        var placeHldr = '<img src="https://via.placeholder.com/150">';
        var searchData;

        //listener for search button
        $("#search").click(function() {
            outputList.innerHTML = ""; //empty html output
            document.body.style.backgroundImage = "url('')";
            searchData = $("#search-box").val();
            //handling empty search input field
            if (searchData === "" || searchData === null) {
                displayError();
            } else {
                // console.log(searchData);
                // $.get("https://www.googleapis.com/books/v1/volumes?q="+searchData, getBookData()});
                $.ajax({
                    url: bookUrl + searchData,
                    dataType: "json",
                    success: function(response) {
                        console.log(response)
                        if (response.totalItems === 0) {
                            alert("no result!.. try again")
                        } else {
                            $("#title").animate({
                                'margin-top': '5px'
                            }, 1000); //search box animation
                            $(".book-list").css("visibility", "visible");
                            displayResults(response);
                        }
                    },
                    error: function() {
                        alert("Something went wrong.. <br>" + "Try again!");
                    }
                });
            }
            $("#search-box").val(""); //clearn search box
        });

        /*
         * function to display result in index.html
         * @param response
         */
        function displayResults(response) {
            for (var i = 0; i < response.items.length; i += 2) {
                item = response.items[i];
                title1 = item.volumeInfo.title;
                author1 = item.volumeInfo.authors;
                publisher1 = item.volumeInfo.publisher;
                bookLink1 = item.volumeInfo.previewLink;
                bookIsbn = item.volumeInfo.industryIdentifiers[1].identifier
                bookImg1 = (item.volumeInfo.imageLinks) ? item.volumeInfo.imageLinks.thumbnail : placeHldr;

                item2 = response.items[i + 1];
                title2 = item2.volumeInfo.title;
                author2 = item2.volumeInfo.authors;
                publisher2 = item2.volumeInfo.publisher;
                bookLink2 = item2.volumeInfo.previewLink;
                bookIsbn2 = item2.volumeInfo.industryIdentifiers[1].identifier
                bookImg2 = (item2.volumeInfo.imageLinks) ? item2.volumeInfo.imageLinks.thumbnail : placeHldr;

                // in production code, item.text should have the HTML entities escaped.
                outputList.innerHTML += '<div class="row mt-4">' +
                    formatOutput(bookImg1, title1, author1, publisher1, bookLink1, bookIsbn) +
                    formatOutput(bookImg2, title2, author2, publisher2, bookLink2, bookIsbn2) +
                    '</div>';

                console.log(outputList);
            }
        }

        /*
         * card element formatter using es6 backticks and templates (indivial card)
         * @param bookImg title author publisher bookLink
         * @return htmlCard
         */
        function formatOutput(bookImg, title, author, publisher, bookLink, bookIsbn) {
            // console.log(title + ""+ author +" "+ publisher +" "+ bookLink+" "+ bookImg)
            var viewUrl = 'book.html?isbn=' + bookIsbn; //constructing link for bookviewer
            var htmlCard = `
           
            <div>
       <div class="card" style="">
         <div class="row">
           <div>
             <img src="${bookImg}" class="card-img" style="width:40%" alt="...">
           </div>
           <div>
             <div class="card">
               <h5 class="card-title">${title}</h5>
               <p class="card-text">Author: ${author}</p>
               <p class="card-text">Publisher: ${publisher}</p>
               <a target="_blank" href="${viewUrl}" class="btn btn-secondary">Read Book</a>
             </div>
           </div>
         </div>
       </div>
     </div>`
            return htmlCard;
        }

        //handling error for empty search box
        function displayError() {
            alert("search term can not be empty!")
        }

    });
</script>