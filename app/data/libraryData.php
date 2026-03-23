<?php

return [

    // =================================================
    // AUTHORS
    // =================================================
    "authors" => [

        [
            "id"=>1,
            "name"=>"Abraham Silberschatz",
            "nationality"=>"Israeli / American",
            "birth_year"=>1952,
            "fields"=>"Database Systems, Operating Systems",
            "biography"=>"Abraham Silberschatz is one of the most influential computer science authors in the world. His books are used in universities across the globe and are considered essential for learning operating systems and database systems.",
            "university"=>"Yale University",
            "experience"=>"More than 30 years teaching Computer Science",
            "awards"=>"IEEE Fellow, ACM Distinguished Educator",
            "photo"=>"silber.jpg"
        ],

        [
            "id"=>2,
            "name"=>"Andrew S. Tanenbaum",
            "nationality"=>"Dutch / American",
            "birth_year"=>1944,
            "fields"=>"Distributed Computing, Operating Systems, Computer Networks",
            "biography"=>"Andrew S. Tanenbaum is one of the most recognized authors in computer science education. His books on networking and operating systems are used in thousands of universities worldwide.",
            "university"=>"Vrije Universiteit Amsterdam",
            "experience"=>"More than 40 years teaching Computer Science",
            "awards"=>"ACM Fellow, IEEE Award for Education",
            "photo"=>"tanenbaum.jpg"
        ]

    ],

    // =================================================
    // PUBLISHERS
    // =================================================
    "publishers" => [

        [
            "id"=>1,
            "name"=>"John Wiley & Sons",
            "country"=>"United States",
            "founded"=>1807,
            "genere"=>"Academic Publisher",
            "description"=>"John Wiley & Sons is one of the oldest academic publishers in the world. It publishes books in science, engineering, and technology.",
            "headquarters"=>"Hoboken, New Jersey",
            "website"=>"https://www.wiley.com",
            "specialization"=>"Technology, Science, Engineering, Mathematics",
            "logo"=>"wiley.jpg"
        ],

        [
            "id"=>2,
            "name"=>"Pearson Education",
            "country"=>"United Kingdom",
            "founded"=>1844,
            "genere"=>"Educational Publisher",
            "description"=>"Pearson Education is a global publishing company focused on educational materials and textbooks, especially in computer science and engineering.",
            "headquarters"=>"London, United Kingdom",
            "website"=>"https://www.pearson.com",
            "specialization"=>"Educational Books, University Textbooks",
            "logo"=>"pearson.jpg"
        ]

    ],

    // =================================================
    // BOOKS
    // =================================================
    "books" => [

        [
            "id"=>1,
            "title"=>"Operating System Concepts",
            "edition"=>"9th",
            "copyright"=>2012,
            "language"=>"English",
            "pages"=>976,
            "isbn"=>"9781118063330",
            "category"=>"Operating Systems",
            "description"=>"One of the most important books for learning operating systems. It explains how processes, memory, storage, and CPU scheduling work.",
            "difficulty"=>"Intermediate",
            "format"=>"Hardcover / eBook",
            "rating"=>"4.7 / 5",
            "author_id"=>1,
            "publisher_id"=>1
        ],

        [
            "id"=>2,
            "title"=>"Database System Concepts",
            "edition"=>"6th",
            "copyright"=>2010,
            "language"=>"English",
            "pages"=>1376,
            "isbn"=>"9780073523323",
            "category"=>"Database Systems",
            "description"=>"A fundamental book for understanding relational databases, SQL, normalization, and database architecture.",
            "difficulty"=>"Intermediate",
            "format"=>"Hardcover / eBook",
            "rating"=>"4.6 / 5",
            "author_id"=>1,
            "publisher_id"=>1
        ],

        [
            "id"=>3,
            "title"=>"Computer Networks",
            "edition"=>"5th",
            "copyright"=>2010,
            "language"=>"English",
            "pages"=>960,
            "isbn"=>"9780132126953",
            "category"=>"Computer Networks",
            "description"=>"A classic networking book that explains how the Internet works, including protocols, routing, and network layers.",
            "difficulty"=>"Intermediate",
            "format"=>"Hardcover / eBook",
            "rating"=>"4.8 / 5",
            "author_id"=>2,
            "publisher_id"=>2
        ],

        [
            "id"=>4,
            "title"=>"Modern Operating Systems",
            "edition"=>"4th",
            "copyright"=>2014,
            "language"=>"English",
            "pages"=>1136,
            "isbn"=>"9780133591620",
            "category"=>"Operating Systems",
            "description"=>"An advanced operating systems book focused on virtualization, distributed systems, and modern OS architecture.",
            "difficulty"=>"Advanced",
            "format"=>"Hardcover / eBook",
            "rating"=>"4.7 / 5",
            "author_id"=>2,
            "publisher_id"=>2
        ]

    ]

];