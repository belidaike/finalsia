<template>

    <div class="bg-warning wowi rounded-5"><h1 class="text-center glow" style="color:black">Places to Relax</h1></div> 
    <div class="row d-flex justify-content-center">
        <div class="asd " v-for="place in places" :key="place.id">
            <div class="column card-header text-center rounded-3">
                <h3 class="bg-info qwe">{{ place.name }}</h3>
            </div>
            <div class="card-body text-center bg-white rounded-3">
                <br>
                <h3 class="mt-3">Delicacies:</h3><br>
                <ul>
                    <li v-for="delicacy in place.delicacys" :key="delicacy.id">
                        <p class="uwu">---Food--- </p>| &nbsp; {{ delicacy.food }} &nbsp; |
                    </li><br>
                    <li v-for="delicacy in place.delicacys" :key="delicacy.id">
                        <p class="uwu">---Texture---</p>| &nbsp; {{ delicacy.texture }} &nbsp; |
                    </li><br>
                    <li v-for="delicacy in place.delicacys" :key="delicacy.id">
                        <p class="uwu">---Taste---</p>| &nbsp; {{ delicacy.taste }} &nbsp; |
                    </li>
                </ul><br><br>
            </div>
            <div class="">
                <p class="text-center bg-info rounded-3">The place is best known as:</p> <h4 class="text-center">{{ place.type }}</h4>
            </div>
        </div>
    </div>



</template>

<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout,
    props: {
        places: Array
    }
}
</script>

<style scoped>
.card {
    width: 375px;
}
.qwe {
    display: inline-block;
    border-radius: 2em;
    padding: 20px;
}
.glow {
    color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
  font-style: italic;
  font-size: 60px;
}
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
.wowi {
    background-image: url('./place.jpg');
    height: 300px;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content:center;
    margin-top: 30px;
}
.row {
    display: inline-block;
}

.instruction {
    list-style: numbers;
}
.text-center {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.column {
    padding: 10px;
}

h1 {
    color: white;
}
.asd {
    margin: 100px auto;
    width: 40%;
}
/* .line {
    margin: auto;
    width: 90%;
    border: 3px solid green;
    padding: 10px;
} */
.row {

    display: flex;
    justify-content: center;
}
hr {
    border-top: 20px dashed white;
}
li{
    list-style-type: none;
}
ul {
    padding: 0;
}
.uwu {
    color: black;
    margin: 0;
}
</style>