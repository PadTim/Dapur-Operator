<section>
    <div class="container-fluid mt-1">
        @if(session()->has('success'))
        <div class="alert alert-success bg-gradient alert-dismissible fade show fw-bold shadow-lg glass p-0 m-0" role="alert">
            <marquee direction="right"> <img class="img-fluid"
                    src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="" style="width: 50px">
                    <i class="fas fa-check-square me-2"></i> {{  session('success')}}
            </marquee>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('Input Berhasil'))
        <div class="alert alert-success bg-gradient alert-dismissible fade show fw-bold shadow-lg glass p-0 m-0" role="alert">
            <marquee direction="right"> <img class="img-fluid"
                    src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="" style="width: 50px">
                    <i class="fas fa-check-square me-2"></i> {{  session('Input Berhasil')}}
            </marquee>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(session()->has('Update Berhasil'))
        <div class="alert alert-warning bg-gradient alert-dismissible fade show fw-bold shadow-lg p-0 m-0" role="alert">
            <marquee direction="right"><img class="img-fluid"
                    src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="" style="width: 50px"> 
                     <i class="fas fa-user-edit me-2"></i> {{  session('Update Berhasil')}}</marquee>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert bg-gradient bg-maroon alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i>Hai !!! {{ auth()->user()->name }}</h5>

            @foreach ($errors->all() as $error)
            <h5><img class="img-fluid" src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="" style="width: 50px">
                {{ $error }}</h5>
            @endforeach
        </div>
        @endif

        @if(session()->has('Import Berhasil'))
        <div class="alert alert-success bg-gradient alert-dismissible fade show fw-bold shadow-lg p-0 m-0" role="alert">
            <marquee direction="right"> <i class="fas fa-check-square me-2"></i> {{  session('Import Berhasil')}}
            </marquee>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
   
        @if(session()->has('Delete Berhasil'))
        <div class="alert alert-danger bg-gradient alert-dismissible fade show fw-bold shadow-lg p-0 m-0" role="alert">
            <marquee direction="right"><img class="img-fluid"
                src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="" style="width: 50px">
                <i class="fas fa-laptop-code me-2"></i> {{  session('Delete Berhasil')}}
            </marquee>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('Bersih'))
        <div class="alert alert-danger bg-gradient alert-dismissible fade show fw-bold shadow-lg p-0 m-0" role="alert">
            <marquee direction="right"><img class="img-fluid"
                src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="" style="width: 50px">
                <i class="fas fa-laptop-code me-2"></i> {{  session('Bersih')}}</marquee>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
</section>
