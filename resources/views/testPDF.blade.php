<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mon interface de tableau avec Tailwind CSS</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css" />
  </head>
  <body>
    <div class="bg-white mx-auto max-w-2xl shadow-md rounded my-8">
      <table class="text-left w-full border-collapse">
        <thead>
          <tr class="bg-blue-500 text-white">
            <th class="py-4 px-6 font-bold uppercase">Nom</th>
            <th class="py-4 px-6 font-bold uppercase">Date</th>
            <th class="py-4 px-6 font-bold uppercase">Montant</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-100">
            <td class="py-4 px-6 border-b border-gray-200">Facture 1</td>
            <td class="py-4 px-6 border-b border-gray-200">01/01/2022</td>
            <td class="py-4 px-6 border-b border-gray-200 text-green-600 font-semibold">$1000</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="py-4 px-6 border-b border-gray-200">Facture 2</td>
            <td class="py-4 px-6 border-b border-gray-200">01/02/2022</td>
            <td class="py-4 px-6 border-b border-gray-200 text-green-600 font-semibold">$1200</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="py-4 px-6 border-b border-gray-200">Facture 3</td>
            <td class="py-4 px-6 border-b border-gray-200">01/03/2022</td>
            <td class="py-4 px-6 border-b border-gray-200 text-red-600 font-semibold">-$500</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="py-4 px-6 border-b border-gray-200">Facture 4</td>
            <td class="py-4 px-6 border-b border-gray-200">01/04/2022</td>
            <td class="py-4 px-6 border-b border-gray-200 text-green-600 font-semibold">$800</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
