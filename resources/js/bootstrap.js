import axios from 'axios';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

window.Echo.channel('admin.notifications')
    .listen('.admin.notification', (event) => {
        const title = event.title ? `<strong>${event.title}</strong><br>` : '';
        const message = event.message ?? 'Nova notificacao do sistema.';

        if (window.Noty) {
            new window.Noty({
                type: event.type ?? 'info',
                text: `${title}${message}`,
                timeout: 5000,
                progressBar: true,
                closeWith: ['click', 'button'],
            }).show();

            return;
        }

        console.info('[admin.notification]', event);
    });
