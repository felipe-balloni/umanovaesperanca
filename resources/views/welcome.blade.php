<x-guest-layout>

    <header class="hero h-28 sm:h-48 md:h-64">
        <div class="container flex space-x-8 justify-center items-center">
            <img src="/img/home.png" alt="" class="pt-4 h-28 sm:h-48 md:h-64">
            <h1 class="font-rancho uppercase tracking-widest text-2xl sm:text-3xl md:text-4xl lg:text-6xl text-indigo-500 outlined whitespace-nowrap">
                Lar "Uma Nova Esperança"
            </h1>
        </div>
    </header>
    <main class="md:container text-gray-900 text-base sm:text-lg md:text-xl font-medium sm:font-semibold leading-5 sm:leading-7
             sm:tracking-wide">
        <div class="flex flex-col lg:flex-row space-y-3 md:space-x-4 lg:space-y-0 overflow-hidden bg-gray-100
                    text-gray-900 mt-10 py-4 sm:py-6 md:py-10 px-2 sm:px-4 md:px-8 md:rounded-t-xl">
            <div class="w-full lg:w-2/3 lg:pr-4 lg:border-r-2">
                <div class="relative aspect-w-16 aspect-h-9">
                    <iframe width="640"
                            height="360"
                            class="absolute rounded"
                            src="https://www.youtube.com/embed/Mo87fCIrhzQ?showinfo=0&rel=0&modestbranding=1"
                            title="Video Lar Uma Nova Esperança"
                            frameborder="0"
                            allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="w-full lg:w-1/3 space-y-3">
                <p>O <strong>Lar Uma Nova Esperança</strong> é uma entidade filantrópica, sem fins lucrativos e
                    idônea, que se dedica a ajudar Mães e crianças.</p>
                <p>Basicamente nós trazemos para morar na instituição as Mães e as crianças que foram abandonadas
                    pelo marido e estão em risco social.</p>
                <p>A entidade é inteiramente mantido com doações e promoções.</p>
                <h2 class="font-bold text-2xl sm:text-xl md:text-2xl lg:text-3xl">Podemos contar com você?</h2>
            </div>
        </div>

        <div
            class="flex flex-col space-y-3 bg-green-100 py-4 sm:py-6 md:py-10 px-2 sm:px-4 md:px-8 md:mb-8 md:rounded-b-xl">
            <h1 class="font-bold text-2xl sm:text-3xl md:text-4xl">Depoimento de algumas das crianças do LAR</h1>
            <div class="relative aspect-w-16 aspect-h-9">
                <iframe width="640"
                        height="360"
                        class="absolute rounded"
                        src="https://www.youtube.com/embed/QQ4LGGbbWZw?showinfo=0&rel=0&modestbranding=1"
                        title="Video Lar Uma Nova Esperança"
                        frameborder="0"
                        allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="sm:mt-4 space-y-3">
                <p>Precisamos muito de sua ajuda. Temos por meta construir os prédios no terreno, mobiliar e abrir mais
                    portas.</p>
                <p>Você pode contribuir para a construção de um local de socorro a famílias inteiras, com grave risco
                    social.</p>
                <h2 class="font-semibold text-2xl sm:text-3xl md:text-4xl py-4 sm:py-6 md:py-10">Conheça a casa das
                    Famílias Moradoras</h2>

                <x-carousel></x-carousel>

                <h3 class="font-semibold sm:font-bold text-2xl sm:text-3xl md:text-4xl">Qual, então, o melhor emprego
                    que se pode dar à riqueza?</h3>
                <p>Procurai – nestas palavras: <strong>“Amai-vos uns aos outros”</strong>, a solução do problema. Elas
                    guardam o segredo do bom emprego das riquezas. Aquele que se acha animado do amor do próximo tem aí
                    toda traçada a sua linha de proceder. Na caridade está, para as riquezas, o emprego que mais apraz a
                    Deus.</p>
            </div>
            <div
                class="grid grid-cols-1 sm:grid-cols-3 space-y-3 sm:space-x-4 sm:space-y-0 text-center pt-3 sm:pt-10 place-content-center">
                <div class="flex flex-col flex-grow justify-between border border-1 rounded-lg bg-white px-4 py-2">
                    <h3 class="font-semibold text-xl lg:text-2xl">Doar por TED ou PIX</h3>
                    <div class="flex justify-center">
                        <img width="200px" src="/img/PIX_QR.jpeg" alt="QR Code para PIX">
                    </div>
                    <p class="pt-4 font-light text-xs lg:text-sm">
                        CNPJ 12.535.685/0001-50 Banco: CEF AG 3966-7 CC 1966-1
                    </p>
                </div>
                <div class="flex flex-col flex-grow justify-between border border-1 rounded-lg bg-white px-4 py-2">
                    <h3 class="font-semibold text-xl lg:text-2xl">Doar por Cartão de Credito</h3>
                    <div class="flex justify-center mt-10">
                        <a href="https://pagseguro.uol.com.br/checkout/v2/donation.html?currency=BRL&amp;receiverEmail=admin@umanovaesperanca.com.br"
                           target="_blank">
                            <img width="209"
                                 src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/209x48-doar-assina.gif"
                                 alt="">
                        </a>
                    </div>
                    <p class="pt-4 font-light text-xs lg:text-sm">
                        Doe qualquer valor pelo cartão de crédito.
                    </p>
                </div>
                <div class="border border-1 rounded-lg bg-white px-4 py-2">
                    <h3 class="font-semibold text-xl lg:text-2xl">Doar por boleto</h3>

                </div>
            </div>
            <div class="flex justify-center pt-10">
                <img src="/img/agradecimento_lar.png" alt="Agradecimento doação">
            </div>
        </div>

    </main>

    <footer class="bg-footer h-60">

    </footer>


</x-guest-layout>
