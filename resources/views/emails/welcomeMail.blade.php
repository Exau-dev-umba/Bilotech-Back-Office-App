<x-mail::message>
# Bienvenue sur {{config('mail.from.name')}}, {{ $user->name }} !

Nous sommes ravis de vous accueillir sur notre application. Votre compte a été créé avec succès.

Vous pouvez maintenant vous connecter à votre compte en utilisant votre adresse email et votre mot de passe.

Merci d'utiliser notre Application !

Cordialement,<br>
L'équipe de {{config('mail.from.name')}}
</x-mail::message>
