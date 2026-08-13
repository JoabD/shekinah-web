@component('mail::message')

# Aviso de Pagos Pendientes

Buen día, **{{ $nombre }}**.

Le informamos que cuenta con pagos pendientes correspondientes a los siguientes meses:

@component('mail::panel')
**{{ $meses }}**
@endcomponent

@if($notificacion >= 1 && $notificacion <= 3)

Esta es su **notificación número {{ $notificacion }}**.

Le invitamos a ponerse al corriente con sus pagos a la brevedad posible, ya que al acumular **más de 3 notificaciones**, su usuario será **bloqueado** de manera automática.

@endif

@if($notificacion > 3)

@component('mail::panel')
**SU USUARIO HA SIDO BLOQUEADO** 🚫
@endcomponent

Debido a que ha superado el número permitido de notificaciones, su usuario se encuentra actualmente bloqueado.

El acceso será restablecido una vez que regularice sus pagos pendientes.

@endif

Agradecemos su atención y disposición para mantenerse al corriente.

Bendiciones.<br>

@endcomponent
