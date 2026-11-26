<div>
    <div class="container position-absolute top-50 start-50 translate-middle" style="max-width: 450px">
        <div class="card shadow border-0">
            <div class="card-body p-4 p-md-5">
                <h3 class="text-center mb-4">Entrar <i class="bi bi-box-arrow-in-right"></i></h3>

                @if (session()->has('erro'))
                    <div class="alert alert-danger">
                        {{ session('erro') }}
                    </div>
                @endif

                <form wire:submit="login">
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.live.debounce.500ms="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control @error('senha') is-invalid @enderror" wire:model.live.debounce.500ms="senha">
                        @error('senha')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn-outline theme-accent w-100" wire:loading.attr="disabled" wire:target="login">
                        <span wire:loading.remove wire:target="login">
                            Entrar
                        </span>
                        <span wire:loading wire:target="login">
                            Entrando...
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
