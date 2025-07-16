<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-heading">
          <h6>Nuestros Productos</h6>
          <h2>Nuestras prendas mas populares</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-item-carousel">
    <div class="col-lg-12">
      <div class="owl-menu-item owl-carousel">
        <div class="item">
          <div class='card card1'>
            <div class="price"><h6>40 S/.</h6></div>
            <div class='info'>
              <h1 class='title'>Vestido Rosa</h1>
              <p class='description'>Hermoso vestido ideal para el verano e incluso para otras oportunidades.</p>
              <button onclick="addToCart('Vestido Rosa', 40)">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class='card card2'>
            <div class="price"><h6>45 S/.</h6></div>
            <div class='info'>
              <h1 class='title'>Falda Short Celeste</h1>
              <p class='description'>Luce esta hermosa falda short y combínalo con tu outfit.</p>
              <button onclick="addToCart('Falda Short Celeste', 45)">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class='card card3'>
            <div class="price"><h6>35 S/.</h6></div>
            <div class='info'>
              <h1 class='title'>BodySuits de Nylon</h1>
              <p class='description'>Este hermoso y cómodo BodySuit de nylon te hará lucir.</p>
              <button onclick="addToCart('BodySuits de Nylon', 35)">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class='card card4'>
            <div class="price"><h6>43 S/.</h6></div>
            <div class='info'>
              <h1 class='title'>Jeans</h1>
              <p class='description'>Aprovecha esta super Oferta que incluye una correa. No te quedes sin el tuyo.</p>
              <button onclick="addToCart('Jeans', 43)">Agregar al carrito</button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class='card card5'>
            <div class="price"><h6>50 S/.</h6></div>
            <div class='info'>
              <h1 class='title'>CONJUNTOS RIB TOP</h1>
              <p class='description'>Ideal para esta temporada, colores y tallas disponibles.</p>
              <button onclick="addToCart('CONJUNTOS RIB TOP', 50)">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Menu Area Ends ***** -->

<!-- ***** Carrito lateral ***** -->
<aside id="cart" class="hidden">
  <h2>🛒 Carrito</h2>
  <ul id="cart-items"></ul>
  <p>Total: S/ <span id="cart-total">0</span></p>
  <button onclick="clearCart()">Vaciar carrito</button>
</aside>

<!-- ***** Botón "Ver carrito" (ponlo en el <ul class="nav"> de tu header): -->
<li>
  <a href="javascript:;" id="cart-toggle">🛒 Ver Carrito (<span id="cart-count">0</span>)</a>
</li>

<!-- ***** Script del carrito ***** -->
<script>
let cart = [];
let cartVisible = false;

function addToCart(name, price) {
  cart.push({ name, price });
  updateCart();
}

function updateCart() {
  const cartItems = document.getElementById('cart-items');
  const cartTotal = document.getElementById('cart-total');
  const cartCount = document.getElementById('cart-count');

  cartItems.innerHTML = '';
  let total = 0;
  cart.forEach(item => {
    total += item.price;
    const li = document.createElement('li');
    li.textContent = `${item.name} - S/ ${item.price}`;
    cartItems.appendChild(li);
  });

  cartTotal.textContent = total;
  cartCount.textContent = cart.length;
}

function clearCart() {
  cart = [];
  updateCart();
}

document.getElementById('cart-toggle').addEventListener('click', () => {
  cartVisible = !cartVisible;
  document.getElementById('cart').classList.toggle('hidden', !cartVisible);
});
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J7Q9QTQMC2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J7Q9QTQMC2');
</script>
