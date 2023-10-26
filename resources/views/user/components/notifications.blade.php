<script>
    /**
     * Função para exibir uma mensagem de notificação.
     *
     * @param {string} msg - A mensagem a ser exibida na notificação.
     * @param {string} position - A posição da notificação (padrão: 'bottom-start').
     * @param {boolean} showCloseButton - Define se o botão de fechar deve ser exibido (padrão: true).
     * @param {string} closeButtonHtml - O conteúdo HTML personalizado do botão de fechar (padrão: '').
     * @param {number} duration - A duração da notificação em milissegundos (padrão: 3000).
     */
    showMessage = (msg = 'Example notification text.', position = 'bottom-start', showCloseButton = true,
        closeButtonHtml = '', duration = 3000) => {
        const toast = window.Swal.mixin({
            toast: true,
            position: position || 'bottom-start',
            showConfirmButton: false,
            timer: duration,
            showCloseButton: showCloseButton,
        });
        toast.fire({
            title: msg,
        });
    };

    /**
     * Função para criar um alerta com ação personalizada.
     */
    clickCallable = () => {
        new window.Swal({
            toast: true,
            position: 'bottom-start',
            text: "Custom callback when action button is clicked.",
            showCloseButton: true,
            showConfirmButton: false,
        }).then((result) => {
            new window.Swal({
                toast: true,
                position: 'bottom-start',
                text: 'Thanks for clicking the Dismiss button!',
                showCloseButton: true,
                showConfirmButton: false,
            });
        });
    };

    /**
     * Função para exibir uma notificação colorida.
     *
     * @param {string} msg - A mensagem a ser exibida na notificação.
     * @param {string} color - A cor da notificação (padrão: 'success').
     * @param {string} position - A posição da notificação (padrão: 'bottom-start').
     * @param {boolean} showCloseButton - Define se o botão de fechar deve ser exibido (padrão: true).
     * @param {number} timer - A duração da notificação em milissegundos (padrão: 3000).
     */

    coloredToast = (msg = '', color = 'success', position = 'bottom-start', showCloseButton = true, timer = 30000) => {
        const toast = window.Swal.mixin({
            toast: true,
            position: position,
            showConfirmButton: false,
            timer: timer,
            showCloseButton: showCloseButton,
            animation: false,
            customClass: {
                popup: `color-${color}`
            },
            target: document.getElementById(color + '-toast')
        });
        toast.fire({
            title: msg,
        });
    };

    /** 
     * Lógica de Exibição de Mensagens de Erro ou Sucesso
     * 
     * Este bloco de código Blade verifica se há erros de validação no array $errors ou uma mensagem de sucesso
     * na sessão session('return_success') e exibe essas mensagens em alertas customizados.

     * Se houver erros, os erros são coletados e exibidos em um único alerta de perigo (danger).
     * Se houver uma mensagem de sucesso, ela é exibida em um alerta de sucesso (success).
     */

    /** Lógica para exibir erros de validação **/
    @if ($errors->any())
        var errorMessages = <?= json_encode($errors->all()) ?>

        document.addEventListener("DOMContentLoaded", function() {
            let errorMessage = '';

            if (errorMessages.length > 1) {
                errorMessages.forEach((message, index) => {
                    errorMessage += `Erro ${index + 1}: ${message}\n`;
                });
            } else {
                errorMessage = errorMessages[0];
            }

            coloredToast(errorMessage, 'danger', 'top', true, 30000);
        });

        /** Lógica para exibir mensagem de sucesso **/
    @elseif (session()->has('return_success') && session('return_success') != 'null')

        document.addEventListener("DOMContentLoaded", function() {
            coloredToast('{{ session()->pull('return_success') }}');
        });
    @endif

    /**
     *
     *
     **/
    async function showAlert(type) {
        if (type === 10) {
            new window.Swal({
                icon: 'warning',
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: 'Delete',
                padding: '2em',
                customClass: 'sweet-alerts'
            }).then((result) => {
                if (result.value) {
                    new window.Swal({
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        icon: 'success',
                        customClass: 'sweet-alerts'
                    });
                }
            });
        }
    };
</script>
