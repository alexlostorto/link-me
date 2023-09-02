<?php

$seo_keywords = 'alexlostorto, Alex, Alex lo Storto, Alex Lo Storto, Photography Portfolio, portfolio, portfolio website, Portfolio Website, Photography, photographer, programmer, coder, web developer, open source, linktree, links, contact';
$seo_description = 'My links ฅ^•ﻌ•^ฅ';
$seo_author = 'Alex lo Storto';
$site_title = 'Fav links ฅ^•ﻌ•^ฅ';

$username = 'ฅ^•ﻌ•^ฅ';

include('components/header.php');

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Itim&family=Inter&display=swap');

    html,
    body {
        height: 100%;
        overflow: hidden;
    }

    *,
    .credits {
        font-family: 'Itim', cursive;
    }

    .credits {
        position: absolute;
        bottom: 2rem;
        left: 50%;
        transform: translate(-50%, -50%);
        white-space: nowrap;
    }

    h5 {
        font-family: 'Inter', sans-serif;
    }

    .link-button {
        width: 16rem;
        border-radius: 50px;
        border: none;
        background-color: white;
        box-shadow: 8px 10px 0px rgb(0, 0, 0);
    }

    .link-button:hover {
        box-shadow: 4px 5px 0px rgb(0, 0, 0);
        color: black;
    }

    @media (max-width: 576px) {
        .custom-max-width {
            width: 9rem !important;
        }

        .credits {
            bottom: 0.8rem;
            font-size: 1rem;
        }

        .no-pad {
            padding: 0 !important;
        }

        .small-pad {
            padding: 1rem !important;
        }
    }
</style>

<div style="background-image: url('../assets/images/links-background.png'); background-size: cover; height: 100%; overflow: auto;" class="d-flex align-items-center justify-content-center container-fluid">
    <div class="pb-5 mb-5 small-pad">
        <div class="d-flex flex-column justify-content-center align-items-center py-3 no-pad">
            <img style="width: max-content;" class="custom-max-width" src="../assets/images/profile-picture.png" alt="Profile Picture">
            <h5 class="text-center py-4 pt-sm-2 small-pad"><?= $username; ?></h5>
            <a class="link-button py-3 my-3 text-center" href="https://youtube.com/@alexlostorto" target="_blank">Youtube</a>
            <a class="link-button py-3 my-3 text-center" href="https://www.instagram.com/alexlostorto" target="_blank">Instagram</a>
            <a class="link-button py-3 my-3 text-center" href="https://www.tiktok.com/@alexlostorto" target="_blank">Tiktok</a>
            <a class="link-button py-3 my-3 text-center" href="https://www.linkedin.com/in/alex-lo-storto" target="_blank">LinkedIn</a>
        </div>
        <h5 class="text-white credits">Created by Alex lo Storto</h5>
    </div>
</div>

<?php include('components/footer.php'); ?>