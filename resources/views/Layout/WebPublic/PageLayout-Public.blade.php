<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="media informasi dan komunikasi - dapur operator">
    <meta name="keywords" content="avexKD farid filantropia ikkos pademangan dapur operator sdn pademangan timur">
    <meta name="author" content="avexKD">
    <meta name="language" content="id">

    <link rel="stylesheet" href="{{ asset('assets/css/WebPublic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/KopiHideung.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/adminLTE/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/trix/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-style.css') }}">

    <script src="{{ asset('assets/js/jquery-37.min.js') }}"></script>
    <script src="{{ asset('assets/js/cdn_select2.js') }}"></script>

    <!-- TriX CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>

    <!-- X-Editable CSS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-editable/js/editable.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-editable/css/bootstrap-editable.css') }}">



    <title>{{ $title }}</title>
</head>

<body>
    <div class="preloader glass flex-column justify-content-center align-items-center bg-transparent">
        <img class="animation__shake" src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="KopiHideung"
            height="255" width="255">
    </div>

    <header class="sticky-top mt-0">
        <nav class="navbar navbar-expand-lg navbar-dark shadow">
            <div class="container ps-2 pe-2">
                <a class="navbar-brand" href="#" style="font-family: 'THE_JACATRA'; font-size:2em;">IKKOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse justify-content-end collapse text-start " id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item me-2">
                            <a class="nav-link active" href="#">Menu 1</a>
                        </li>
                        <li class="nav-item dropdown me-2" style="opacity: 1">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown link</a>
                            <ul class="dropdown-menu text-bg-danger" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link" href="#">Menu 3</a>
                        </li>

                        <li class="nav-item ms-4 me-4">
                            <a class="nav-link loginBTN " href="/login">LoGin</a>
                        </li>
                        <li class="nav-item ms-4 me-4">
                            <a class="nav-link">
                                <div class="-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="darkSwitch">
                                    <label class="form-check-label" for="darkModeSwitch">Dark Mode</label>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
       
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                        data-aos="fade-up" data-aos-delay="200">
                        <h1 style=" font-family: 'THE_JACATRA'; ">Sistem Informasi Akademik</h1>
                        @if (!empty($sekolah))
                        @foreach ($sekolah as $starter)
                        <h1 style=" font-family: 'Pokemon hollow'; font-size:1.5em;">{{ $starter->nama_sekolah }}</h1>
                        @endforeach
                        @else
                            
                        @endif
        
        
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="/profile-sekolah" class="btn-get-started scrollto glass">Strating</a>
                            <a href="https://youtu.be/rXMhDmLTYQI" class="glightbox btn-watch-video" target="_bank"><i
                                    class="bi bi-play-circle"></i><span>Lihat Kami</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('assets/img/hero/hero.png') }}" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="Starter">
<div class="container">
    <div class="row ">
        <div class="col-6">
            <h1 class="text-white text-center text-shadow" style=" font-family: 'THE_JACATRA'; ">Dapur Operator</h1>
            <h1>SDN PADEMANGAN TIMUR 01</h1>
        </div>
        <div class="col-6">
            <img  src="{{ asset('assets/img/hero/hero.png') }}" class="img-fluid naik-Turun" alt="">
        </div>
    </div>
</div>
        </section>
        <section>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate laborum facilis, assumenda voluptatum
                enim pariatur incidunt quisquam corrupti dolorem aperiam quam quis recusandae. Est, minus. Deleniti corporis
                accusantium esse culpa!
                Vel quaerat asperiores, ipsa provident cum incidunt illum, atque nostrum voluptas rem explicabo
                exercitationem voluptates? Iste enim expedita blanditiis quisquam exercitationem laudantium autem sed
                eligendi, ex, consequuntur, nemo mollitia ea!
                Reprehenderit veritatis soluta nemo cum accusantium ratione saepe facilis repudiandae error minus laboriosam
                aliquam pariatur illo itaque alias ipsam fugiat velit aperiam consequuntur sit non, voluptas perferendis.
                Unde, necessitatibus amet!
                Delectus ex aspernatur, facilis quis ad provident, ea non dicta et quidem natus nam doloribus fugiat
                laborum? Atque dolore ut incidunt illum molestiae neque qui perspiciatis soluta. Fugiat, omnis libero.
                Odio alias sequi quibusdam obcaecati dolorum deserunt atque. Perferendis architecto quaerat dolorem sunt ut
                accusamus officia laborum dolorum placeat. Nam nostrum eveniet fugiat possimus dolorem nihil, tempore vitae
                rem voluptates.
                Adipisci optio neque ut commodi id praesentium ipsam corporis, maiores animi quaerat quidem perferendis
                cupiditate dignissimos similique soluta, velit facilis eos deleniti accusamus? Quaerat eligendi, minima
                possimus laboriosam impedit dolor!
                Facilis, vero eum quis temporibus sit voluptatum sunt obcaecati non voluptates nam nesciunt voluptate ea
                neque quia adipisci, quo repudiandae a officiis quasi. Earum, soluta! Adipisci illum sit esse tempora?
                Nam tempore at in quae dicta eos impedit asperiores delectus voluptatibus quaerat. Expedita, dignissimos
                voluptatum. Enim ipsum beatae, velit cupiditate ex amet blanditiis hic doloremque possimus dolorum sequi
                tenetur cumque!
                Ut maiores commodi labore, quis enim tenetur reiciendis eligendi! Vitae hic maiores atque eaque voluptatibus
                alias tenetur quae suscipit sunt deleniti voluptates est, cumque voluptatum, dicta quos laborum magnam
                quaerat?
                Praesentium ipsam commodi omnis doloremque, corrupti, amet iste mollitia voluptatibus nam rem iure harum
                sunt unde autem voluptate, porro necessitatibus magnam. Vel at harum minima commodi quas quibusdam a.
                Repellat.
                Minus quam, animi commodi omnis reiciendis asperiores optio error sunt officiis ex qui ipsam dicta
                perspiciatis iure consequuntur mollitia aliquam tempore repellat doloribus, minima vero. Quia sequi maiores
                iusto cupiditate!
                Perferendis vel nisi aut iusto officia excepturi iste in ad dolores, delectus atque eos molestias
                perspiciatis odit libero autem! Eveniet ipsum at soluta corporis eaque, perspiciatis animi similique
                impedit. Fugit!
                Enim iste officiis delectus vitae a, repudiandae totam explicabo vero nostrum dicta magnam adipisci animi
                asperiores iusto voluptates quibusdam accusamus doloribus ut libero repellat quas inventore quidem eveniet.
                Praesentium, laboriosam.
                Aliquam, autem delectus? Quam, cupiditate repellendus ipsa assumenda quis, totam officia, ipsam voluptatibus
                aliquam vitae amet eaque laboriosam natus sequi eum nesciunt animi odit voluptatem sed iure labore. Tempore,
                sapiente.
                In animi doloremque saepe totam neque veniam enim nisi autem culpa quam sed maiores iste expedita aperiam
                dolorem aliquam fugiat, cum reprehenderit voluptatibus quidem consequuntur ullam tenetur exercitationem
                tempora! Exercitationem.
                Quidem facilis ex neque tenetur quae, ut inventore fugit pariatur ullam dolores blanditiis non magnam
                consequuntur recusandae at vitae provident sit vel quaerat autem! Tempora expedita corporis libero placeat
                recusandae.
                At veritatis fuga ea, aliquid tenetur eos ipsam. Fuga fugiat dolorum temporibus dolores. Ipsum velit natus
                facere, maxime sint saepe a maiores vero nostrum eum. Praesentium dolores officia iure libero.
                Exercitationem nihil necessitatibus at veritatis quos eveniet tenetur assumenda eaque, perspiciatis eius
                voluptatum ex aliquid fuga molestias excepturi aperiam! Sint exercitationem labore blanditiis adipisci
                corporis dicta explicabo, quidem minus assumenda.
                Perspiciatis quibusdam voluptate culpa voluptas esse nostrum reprehenderit unde ullam, totam, fugiat ex
                laboriosam magni dolore ab temporibus rem laborum consequatur voluptatum earum amet. Aliquam fugit sunt
                doloribus quam asperiores!
                Adipisci distinctio, voluptas fugit quod, repellendus voluptatibus voluptate obcaecati nulla aliquid
                eligendi assumenda, beatae maiores optio dolorem doloribus sequi quia tempora maxime impedit laborum
                reprehenderit. Eveniet magnam placeat dignissimos laudantium.
                Modi obcaecati consequuntur deserunt doloremque necessitatibus labore maxime sequi reiciendis, nemo neque at
                numquam vitae, minima eligendi quae corrupti libero aspernatur. Quidem laboriosam repellendus nemo ducimus
                voluptates exercitationem, tenetur eum?
                Quas explicabo a ad architecto illo aperiam repudiandae perspiciatis autem, quisquam rem corrupti aspernatur
                doloremque quidem dignissimos, debitis dolores animi aliquid ducimus totam commodi dolorum repellendus, at
                necessitatibus? Quaerat, rerum.
                Aliquam natus eos vel ipsam tempora labore, voluptatum hic consectetur alias a omnis, doloribus quaerat
                velit consequatur iure nobis in voluptatem! Animi, suscipit quam! Amet excepturi asperiores quasi officiis
                qui?
                Asperiores voluptatem, fugiat impedit accusantium dolorem illum sunt qui voluptates natus corporis
                temporibus odit vero dolor molestiae quam pariatur tenetur? Aperiam nesciunt pariatur architecto voluptatem
                molestiae fugit vero natus dolore.
                Facilis voluptas maiores nobis aliquid dignissimos porro inventore soluta blanditiis pariatur doloremque.
                Alias illum exercitationem eius eligendi quaerat temporibus, minima ad vitae cum hic, ullam earum, dolore
                corrupti quos sed.
                Magni assumenda vitae suscipit impedit nulla praesentium facere et similique facilis earum modi nisi
                incidunt tempore eveniet pariatur optio ratione quasi, non ex. Eaque similique maiores, voluptatibus
                repudiandae saepe eum.
                Qui dicta eaque cumque odio asperiores quibusdam maiores quia expedita, totam vero! Quia expedita aperiam
                harum similique nemo! Molestias architecto eum error minima. Consequuntur minus error, corporis numquam quam
                perspiciatis.
                Obcaecati nesciunt, eveniet hic unde saepe nam modi nobis! Animi unde, consectetur quos illo odit asperiores
                sint temporibus officia ad vitae. Hic, quaerat eligendi obcaecati eos adipisci natus atque alias!
                Veniam fugit ab enim quos! Voluptatibus iste sequi eum quis corrupti in dignissimos totam vitae suscipit
                modi nostrum nam distinctio, libero blanditiis quaerat praesentium vel dicta accusamus ipsum officia nihil!
                Harum iusto a error consequatur rerum, eos optio modi at eum explicabo voluptas. In, at? Omnis repellat
                suscipit vel, voluptatem asperiores eveniet quam alias consectetur rerum ullam voluptatibus aperiam
                exercitationem!
                Fugiat consequatur soluta, atque nostrum exercitationem neque totam optio numquam doloribus, harum aliquid
                inventore, facere cumque voluptatibus non quidem. Maxime illo laboriosam, totam repellendus reiciendis
                tenetur aspernatur modi aperiam ex?
                Minus, exercitationem minima numquam odio similique, temporibus necessitatibus autem a doloribus dolor cum
                vitae corporis dolore, eius dolorum voluptatem veniam aperiam amet aliquid nobis molestiae! Magni maiores
                nesciunt ex nihil.
                Nam libero animi quas error sint, incidunt quos recusandae corporis asperiores id quisquam in cum
                perspiciatis nulla saepe, ipsum iure, suscipit sequi dolores ad! Ab voluptate at voluptates ipsam tempore.
                Officiis consectetur nemo assumenda doloremque libero, est, vel magni necessitatibus quisquam odio minus
                magnam tempore ducimus error quia saepe voluptatem voluptatum maiores iste facilis minima rerum laudantium
                beatae? Magnam, nobis?
                Maxime et laborum impedit, labore repellat assumenda ducimus dolores voluptas odit tempore debitis eveniet
                quod sint aspernatur beatae inventore earum reiciendis ut dolore. Ea tempora doloremque iste fugit tempore
                totam!
                Iste, odio, distinctio, aperiam facilis veniam sint laborum quisquam autem non quod quis corrupti itaque
                dicta? Enim sit reprehenderit omnis aperiam velit molestias minima quidem iusto eum non! Error, ut?
                Culpa repudiandae, voluptatum cumque dicta earum saepe, possimus eos mollitia minima excepturi quidem
                asperiores natus laboriosam laudantium placeat cum dolores nam animi debitis ratione expedita quas error
                unde. Optio, dolor?
                Est ullam mollitia ea saepe! Eligendi, voluptatum! Nihil ad vel velit nemo debitis, vero magni perspiciatis
                similique soluta minima ducimus perferendis itaque alias veritatis dolores. Rerum error eaque possimus
                recusandae.
                Nisi unde totam nesciunt ipsa assumenda a hic, ex labore eos exercitationem ab aut ea libero laboriosam!
                Quod quam labore commodi earum, veniam distinctio repellendus dignissimos, dolorum, excepturi harum ut?
                Adipisci tempora, fugiat cupiditate architecto molestias sequi repellendus deleniti temporibus suscipit
                pariatur et reiciendis laborum impedit quasi ex eum qui rerum fugit, ratione cum sunt animi voluptatibus
                delectus! Voluptates, tenetur?
                Quasi repellat ipsa ea eligendi quod delectus repellendus. Cum, numquam eligendi? Magni architecto
                molestias, id reprehenderit, hic tempore impedit, sint ullam assumenda quia dolores pariatur cupiditate eos.
                Porro, deserunt voluptatem?
                Hic possimus neque corporis. Minima magni error a sequi beatae rerum odit doloremque quis aperiam nesciunt
                explicabo, cumque ipsa optio porro, quasi maxime tempora vitae fugit eos consequuntur necessitatibus quos!
                Quae, tempora molestiae, dignissimos quia dolorem officiis architecto, distinctio harum est rem accusantium
                impedit. Eligendi provident saepe laborum! Tempora iure dicta a alias atque tenetur, quaerat perspiciatis?
                Ducimus, natus inventore?
                Unde molestias voluptatem odit alias est rerum quia optio vitae, qui, deserunt illum corrupti necessitatibus
                harum ab facere ea impedit voluptate reiciendis dolore quibusdam inventore incidunt. Provident, mollitia
                nihil! Iusto.
                Voluptatem laborum illum, eligendi nesciunt aliquid unde culpa libero tenetur quaerat nulla velit, assumenda
                molestiae id tempore, magnam soluta exercitationem error! Nulla esse consectetur quod tempora sunt, mollitia
                molestiae rem.
                Ex nostrum, adipisci neque consequuntur itaque atque iste labore eius architecto non, ad saepe libero quam
                quod. Ex fugiat amet dicta molestias, hic officiis totam recusandae sit expedita ad dignissimos.
                Illum asperiores explicabo blanditiis rerum dolorem at qui vero nostrum, vitae consectetur dolor, minima
                fuga fugit obcaecati soluta dignissimos ut. Voluptatibus nobis ullam voluptatum molestiae mollitia laborum
                aspernatur perspiciatis enim.
                Iste, minus pariatur? Quam itaque corporis nemo illum reprehenderit animi at autem soluta officia nesciunt
                magni excepturi exercitationem vitae placeat quod sed, sequi maiores. Alias rem adipisci temporibus cumque
                voluptate.
                Consectetur, dolorum quia. In saepe quidem quis nostrum distinctio dolorem quos? Sint numquam, repellendus
                recusandae beatae quia quisquam quas nobis? Optio fuga molestiae asperiores eaque et eius. Blanditiis,
                assumenda illo.
                Explicabo vero, minus blanditiis delectus quod rerum labore vel voluptatum repellendus ipsam recusandae
                necessitatibus voluptate tempore, earum alias, adipisci eius? Facilis maiores fugit eveniet sequi nulla,
                obcaecati natus distinctio quaerat?
                Qui quas incidunt laborum libero ad reiciendis, repellat consectetur facere necessitatibus eum officia
                provident quaerat inventore amet quos excepturi dignissimos fugit consequatur voluptates sapiente, doloribus
                similique tenetur dolore? Repudiandae, magni!
                Magnam officiis exercitationem eos cum. Maiores similique impedit nam commodi rem suscipit cumque dolores
                ex, id reprehenderit perferendis repellendus dicta minus quod accusamus totam ipsum esse. Provident id
                cumque inventore.
                Harum, maxime nobis minima perspiciatis debitis blanditiis ullam sequi enim similique explicabo recusandae
                dolores, ad, cupiditate provident? Impedit, pariatur incidunt perspiciatis quas quisquam odit corporis neque
                velit obcaecati necessitatibus optio?
                Error itaque nihil nemo dolore quasi. Nobis veritatis eligendi numquam quod maiores quaerat accusantium
                dolor, magni, error enim culpa. Id natus fugit debitis quisquam odio. Atque ducimus repudiandae porro eum.
                Sapiente iusto libero amet laudantium ea consequatur atque voluptatem labore beatae placeat, earum odio
                impedit fugit veritatis facere, accusamus quidem! Optio non ducimus cupiditate a fugit quos consequatur
                praesentium sapiente?
            </p>
        </section>
      
    </main>
    <footer>
        footer
    </footer>

    {{--         
       <!-- ======= Header ======= -->
    @include('Layout.WebPublic.atas')
    <!-- End Header -->
   
    @yield('Layout.WebPublic.KontenPublik')

    <!-- ======= Footer ======= -->
    @include('Layout.WebPublic.bawah')
    <!-- End Footer --> --}}






    <script src="{{ asset('assets/js/KopiHideung.js') }}"></script>
    <script src="{{ asset('assets/js/matrix.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/adminLTE/js/adminlte.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/plugins/DataTables/js/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- X-Editable JavaScript -->






</body>

</html>
