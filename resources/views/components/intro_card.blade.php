<div class="card bg-dark text-dark mx-auto mt-4" style="width: 70%; text-shadow: #34b38a 1px 0 10px;">
  <img src="/images/homepage-image.jpg" class="card-img" alt="Scootify ride"/>
  <div class="card-img-overlay" style="text-align:left; padding:5rem 1rem">
    <h1 class="card-title" style="color: #0e1013">SCOOTIFY</h1>
    <p class="card-text" style="color: white">
      Unleash the adventurer in you <br>
      rent an e-scooter and explore Luxembourg's hidden gems with ease. <br>
      Book now and get ready to ride into a thrilling urban adventure!
    </p>
    @auth
            <a href="/plans">
            <section style="display:flex; justify-content:start">
             <button type="button" class="btn btn-primary mb-3" style="background-color: #34b38a;">
          <i class="fa-solid fa-user"> </i> Buy Plan
        </button>
      </section>
            </a>
                    
          @else
          <a href="/register">
      <section style="display:flex; justify-content:start">
        <button type="button" class="btn btn-primary mb-3" style="background-color: #34b38a;">
          <i class="fa-solid fa-user"> </i> Subscribe
        </button>
      </section>
    </a>
          @endauth

  </div>  
</div>

