<template>


    <nav class="navbar navbar-expand-lg tangtang">
        <a class="navbar-brand margin" href="#">Tourist Spots</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse design bg-warning" id="navbarNav">


            <ul class="navbar-nav">
                <li class="nav-item whoops">
                    <Link class="nav-link asdf" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
                </li>
                <li class="nav-item asdf">
                    <Link class="nav-link" :class="{'selected': $page.component=='Place'}" href="/place">Places</Link>
                </li>
                <li class="nav-item" asdf>
                    <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about">About Us</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link uwu asdf" :class="{'selected': $page.component=='Contact'}" href="/contact">Contact Us</Link>
                </li>
            </ul>


        </div>

    </nav>

<section class="container">
    <slot />
</section>

<footer class="white text-center mt-5 bg-dark">
    <p>Copyright &copy; 2022. All rights reserved.</p>
</footer>



</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
.white {
    padding: 30px;
}
.white p {
    color: white;
}
.tangtang {
}
h1 {
    color: white;
}
.margin {
    margin-left: 20px;
    font-family: 'Courier New', Courier, monospace;
}
.asdf {
    font-family: monospace;
}
.uwu {
    margin-right: 20px;
}
.selected {
    color: yellow;
    font-weight: bold;
}
.design {
    display: flex;
    justify-content: end;
}
h1 {
    color: white;
}


</style>