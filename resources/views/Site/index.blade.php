@extends('Site.template')
@section('title', 'Boas ideias saem do papel')

@section('content')
    <header id="main-header">
        <!-- <img id="cover-cloud2" src="images/cloud2.svg" alt=""> -->
        <img id="cover-boy" src="images/boy.svg" alt="">
        <!-- <img id="cover-cloud1" src="images/cloud1.svg" alt=""> -->
        <div class="header-info">
            <p class="header-info-title">Aulas particulares</p>
            <p>Ensino Fundamental</p>
            <p>Ensino Médio</p>
            <p><span class="header-info-extra">+</span> Pré-vestibular</p>
            <p><span class="header-info-extra">+</span> Pré-IFBA</p>
            <a href="#about" class="scroll-down link-section">CONHEÇA</a>
        </div>
    </header>
    <section id="about" class="section">
        <h1>A ELABORE</h1>
        <div class="section-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisl ipsum, blandit at vulputate vitae, suscipit vel erat. Nam eu viverra nisi. Aenean rhoncus maximus nunc, sed efficitur ligula viverra congue. Nulla maximus enim ut risus dignissim egestas. Curabitur quis venenatis ante, vel tincidunt nibh.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisl ipsum, blandit at vulputate vitae, suscipit vel erat. Nam eu viverra nisi. Aenean rhoncus maximus nunc, sed efficitur ligula viverra congue. Nulla maximus enim ut risus dignissim egestas. Curabitur quis venenatis ante, vel tincidunt nibh.</p>
        </div>
    </section>
    <section id="team" class="section container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5 d-flex justify-content-center align-intens-center">
                <img class="team-icon" src="images/team.svg" height="auto" width="80%" alt="">
            </div>
            <div class="col-md-5">
                <div class="section-header">
                    <h1 class="">Nossa Equipe</h1>
                    <p>Sempre em busca do conhecimento para oferecer um otimo trabalho</p>            
                </div>
                <div class="row justify-content-center">
                <div class="col-md-5">
                        <div class="team-card text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="indigo"  d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>
                            <h5>Title do card</h5>
                            <p>texto do card que pode ser grande ou pequeno né meninas tutupom</p>                            
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="team-card text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="indigo"  d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>
                            <h5>Title do card</h5>
                            <p>texto do card que pode ser grande ou pequeno né meninas tutupom</p>                            
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="team-card text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="indigo"  d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>
                            <h5>Title do card</h5>
                            <p>texto do card que pode ser grande ou pequeno né meninas tutupom</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section id="gallery" class="section container">
        <div class="section-header">
            <h1>Photos</h1>   
            <p>Conheça mais nosso trabalho</p> 
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <img class="img-fluid" src="images/old-couple.jpg" alt="">
            </div>
            <div class="col-sm-4">
                <img class="img-fluid" src="images/old-couple.jpg" alt="">
            </div>
            <div class="col-sm-4">
                <img class="img-fluid" src="images/old-couple.jpg" alt="">
            </div>
        </div>
        <p class="text-right"><a href="" >Ver Todas</a></p>
    </section>
    <section id="blog" class="section">
        <h1>Blog da Elabore</h1>
        <div class="section-content">
            <div>
                <h3>Título</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisl ipsum, blandit at vulputate vitae, suscipit vel erat. Nam eu viverra nisi.</p>
            </div>
            <a href="">Ver todos os Posts</a>
        </div>
    </section>
    <section id="quote" class="section">
        <div class="section-content">
            <p class="quote-text"> 
                <!-- <img src="images/quotes-symbol.png" class="quote-symbol"> -->
                Com um pé no chão e o outro nas estrelas, o professor pode levar seus alunos a todos os lugares.                
                <!-- <img src="images/quotes-symbol.png" class="quote-symbol-end"> -->
            <p class="quote-author">- Platão</p>
        </div>
    </section>
    <section id="contact" class="section">
        <div class="contact-container">
        <h1>Contato</h1>
        <p><span class="addr">End.:</span> Rua D, 86, Tancredo Neves, Salvador-Ba</p>
        <div class="social-container">
            <a class="social-item" href="mailto:rafaelvfcarvalho@gmail.com">
                <svg class= "social-icon email-icon" width="612px" height="612px" enable-background="new 0 0 612 612" version="1.1" viewBox="0 0 612 612" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#fff" d="m306.77 346.81h0.131c4.615 0 9.176-1.339 12.866-3.777l1.001-0.643c0.218-0.142 0.446-0.271 0.675-0.424l11.658-9.645 278.26-229.62c-0.576-0.795-1.557-1.339-2.602-1.339h-605.52c-0.751 0-1.448 0.272-2.003 0.729l291.12 239.95c3.669 3.038 8.904 4.769 14.413 4.769zm-306.77-212.92v340.37l208.55-168.47zm403.67 173.04 208.33 167.42v-339.32zm-66.237 54.644c-8.305 6.814-19.168 10.57-30.576 10.57-11.451 0-22.304-3.734-30.587-10.516l-47.765-39.394-228.5 184.56v0.587c0 1.753 1.502 3.244 3.276 3.244h605.49c1.741 0 3.232-1.491 3.232-3.255v-0.544l-228.31-183.44z" />
                </svg>
                <span> elabore@gmail.com</span>
            </a> <br>
            <a class="social-item whatsapp-mob" href="https://api.whatsapp.com/send?phone=5571986844328&text=Ola Rafael">
                <svg class="social-icon whatsapp-icon" width="90px" height="90px" enable-background="new 0 0 90 90" version="1.1" viewBox="0 0 90 90" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#fff" id="WhatsApp" d="m90 43.841c0 24.213-19.779 43.841-44.182 43.841-7.747 0-15.025-1.98-21.357-5.455l-24.461 7.773 7.975-23.522c-4.023-6.606-6.34-14.354-6.34-22.637 0-24.213 19.781-43.841 44.183-43.841 24.405 0 44.182 19.628 44.182 43.841zm-44.182-36.859c-20.484 0-37.146 16.535-37.146 36.859 0 8.065 2.629 15.534 7.076 21.61l-4.641 13.689 14.275-4.537c5.865 3.851 12.891 6.097 20.437 6.097 20.481 0 37.146-16.533 37.146-36.857s-16.664-36.861-37.147-36.861zm22.311 46.956c-0.273-0.447-0.994-0.717-2.076-1.254-1.084-0.537-6.41-3.138-7.4-3.495-0.993-0.358-1.717-0.538-2.438 0.537-0.721 1.076-2.797 3.495-3.43 4.212-0.632 0.719-1.263 0.809-2.347 0.271-1.082-0.537-4.571-1.673-8.708-5.333-3.219-2.848-5.393-6.364-6.025-7.441-0.631-1.075-0.066-1.656 0.475-2.191 0.488-0.482 1.084-1.255 1.625-1.882 0.543-0.628 0.723-1.075 1.082-1.793 0.363-0.717 0.182-1.344-0.09-1.883-0.27-0.537-2.438-5.825-3.34-7.977-0.902-2.15-1.803-1.792-2.436-1.792-0.631 0-1.354-0.09-2.076-0.09s-1.896 0.269-2.889 1.344c-0.992 1.076-3.789 3.676-3.789 8.963 0 5.288 3.879 10.397 4.422 11.113 0.541 0.716 7.49 11.92 18.5 16.223 11.011 4.301 11.011 2.866 12.997 2.686 1.984-0.179 6.406-2.599 7.312-5.107 0.9-2.512 0.9-4.663 0.631-5.111z" />
                </svg>
            </a>
            <a class="social-item whatsapp-web" href="https://web.whatsapp.com/send?phone=5571986844328&text=Ola Rafael">
                <svg class="social-icon whatsapp-icon" width="90px" height="90px" enable-background="new 0 0 90 90" version="1.1" viewBox="0 0 90 90" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#fff" id="WhatsApp" d="m90 43.841c0 24.213-19.779 43.841-44.182 43.841-7.747 0-15.025-1.98-21.357-5.455l-24.461 7.773 7.975-23.522c-4.023-6.606-6.34-14.354-6.34-22.637 0-24.213 19.781-43.841 44.183-43.841 24.405 0 44.182 19.628 44.182 43.841zm-44.182-36.859c-20.484 0-37.146 16.535-37.146 36.859 0 8.065 2.629 15.534 7.076 21.61l-4.641 13.689 14.275-4.537c5.865 3.851 12.891 6.097 20.437 6.097 20.481 0 37.146-16.533 37.146-36.857s-16.664-36.861-37.147-36.861zm22.311 46.956c-0.273-0.447-0.994-0.717-2.076-1.254-1.084-0.537-6.41-3.138-7.4-3.495-0.993-0.358-1.717-0.538-2.438 0.537-0.721 1.076-2.797 3.495-3.43 4.212-0.632 0.719-1.263 0.809-2.347 0.271-1.082-0.537-4.571-1.673-8.708-5.333-3.219-2.848-5.393-6.364-6.025-7.441-0.631-1.075-0.066-1.656 0.475-2.191 0.488-0.482 1.084-1.255 1.625-1.882 0.543-0.628 0.723-1.075 1.082-1.793 0.363-0.717 0.182-1.344-0.09-1.883-0.27-0.537-2.438-5.825-3.34-7.977-0.902-2.15-1.803-1.792-2.436-1.792-0.631 0-1.354-0.09-2.076-0.09s-1.896 0.269-2.889 1.344c-0.992 1.076-3.789 3.676-3.789 8.963 0 5.288 3.879 10.397 4.422 11.113 0.541 0.716 7.49 11.92 18.5 16.223 11.011 4.301 11.011 2.866 12.997 2.686 1.984-0.179 6.406-2.599 7.312-5.107 0.9-2.512 0.9-4.663 0.631-5.111z" />
                </svg>
                <span> (71) 0000 - 0000</span>
            </a> <br>
            <a class="social-item" href="https://www.linkedin.com/in/rafael-carvalho-dev/">
                <svg class="social-icon linkedin-icon" enable-background="new 0 0 382 382" version="1.1" viewBox="0 0 382 382" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#fff" d="m347.44 0h-312.89c-19.084 0-34.555 15.471-34.555 34.555v312.89c0 19.085 15.471 34.556 34.555 34.556h312.89c19.085 0 34.556-15.471 34.556-34.556v-312.89c0-19.084-15.471-34.555-34.555-34.555zm-229.24 329.84c0 5.554-4.502 10.056-10.056 10.056h-42.806c-5.554 0-10.056-4.502-10.056-10.056v-179.44c0-5.554 4.502-10.056 10.056-10.056h42.806c5.554 0 10.056 4.502 10.056 10.056v179.44zm-31.459-206.41c-22.459 0-40.666-18.207-40.666-40.666s18.207-40.666 40.666-40.666 40.666 18.207 40.666 40.666-18.206 40.666-40.666 40.666zm255.16 207.22c0 5.106-4.14 9.246-9.246 9.246h-45.934c-5.106 0-9.246-4.14-9.246-9.246v-84.168c0-12.556 3.683-55.021-32.813-55.021-28.309 0-34.051 29.066-35.204 42.11v97.079c0 5.106-4.139 9.246-9.246 9.246h-44.426c-5.106 0-9.246-4.14-9.246-9.246v-181.06c0-5.106 4.14-9.246 9.246-9.246h44.426c5.106 0 9.246 4.14 9.246 9.246v15.655c10.497-15.753 26.097-27.912 59.312-27.912 73.552 0 73.131 68.716 73.131 106.47v86.846z" />
                </svg>
            </a>
            <a class="social-item" href="https://www.facebook.com/rafael.victor.737">
                <svg class="social-icon facebook-icon" enable-background="new 0 0 455.73 455.73" version="1.1" viewBox="0 0 455.73 455.73" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#fff" d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475  h62.025v64.622h-44.382c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z" />
                </svg>
            </a>
        </div>
        </div>
    </section>
    <div id="go-top">
    <svg id="go-top-arrow" width="43.941mm" height="31.618mm" version="1.1" viewBox="0 0 43.941 31.618" xmlns="http://www.w3.org/2000/svg">
        <g transform="translate(-47.276 -38.089)">
            <path transform="scale(.26458)" d="m261.33 162.86-67.596 84.93 0.7832 0.61914 67.205-84.436 67.203 84.436 0.7832-0.61914-67.596-84.93-0.39063 0.31055z" color="#000000" color-rendering="auto" dominant-baseline="auto" fill="#fff" image-rendering="auto" shape-rendering="auto" solid-color="#000000" stroke="#fff" stroke-dashoffset="86.213" stroke-linecap="round" stroke-linejoin="round" stroke-width="30.104" style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;paint-order:normal;shape-padding:0;text-decoration-color:#000000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none;white-space:normal"/>
        </g>
    </svg>

    </div>

@endsection