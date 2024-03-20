@extends('template.base')

@section('content')
<div>
    <div class="flex flex-col item-center text-center h-96 __dashboard-bg mb-4 mobile:h-[409px]"><span class="text-5xl mobile:text-[24px] fontweight__bold fontcolor__white text-center mobile:leading-9 mb-4 cursor-default mobile:px-3">Beli Rumah Impianmu hanya di Homespot</span>
        <div class="px-[20%] tab:px-[5%] smallPc:px-[5%] mobile:px-[5%]">
            <div class="fixed top-[65px] xxl:left-[28%] largePc:left-[43%] mobile:left-[50%] xxl:h-[42px] largePc:h-[42px] mobile:h-[55px] mobile:w-[380px]" style="display: none; transform: translateX(-50%); background-color: rgb(225, 248, 235); color: rgb(39, 174, 96); padding: 12px; border-radius: 4px; max-width: 700px;">
                <div class="flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_12234_4647)">
                            <path d="M8.00065 1.3335C4.32065 1.3335 1.33398 4.32016 1.33398 8.00016C1.33398 11.6802 4.32065 14.6668 8.00065 14.6668C11.6807 14.6668 14.6673 11.6802 14.6673 8.00016C14.6673 4.32016 11.6807 1.3335 8.00065 1.3335ZM6.19398 10.8602L3.80065 8.46683C3.54065 8.20683 3.54065 7.78683 3.80065 7.52683C4.06065 7.26683 4.48065 7.26683 4.74065 7.52683L6.66732 9.44683L11.254 4.86016C11.514 4.60016 11.934 4.60016 12.194 4.86016C12.454 5.12016 12.454 5.54016 12.194 5.80016L7.13398 10.8602C6.88065 11.1202 6.45398 11.1202 6.19398 10.8602Z" fill="#27AE60"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_12234_4647">
                                <rect width="16" height="16" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="font-medium text-[#525252] px-2" style="font-size: 12px; line-height: 18px;">Terima kasih, penilaianmu berhasil dikirim! <button class="mobile:hidden" style="float: right; background-color: transparent; border: medium; color: rgb(39, 174, 96); cursor: pointer; padding-left: 8px;">X</button></span>
                </div>
            </div>
            <div class="flex flex-row mobile:flex-col gap-2 p-[17px] bg-[#292929] bg-opacity-70 rounded-xl">
                <div class="w-4/6 mobile:w-full mobile:h-10">
                    <div class="w-full">
                        <div class="flex flex-row gap-3">
                            <div class="textbox-label__wrapper"><span class="textbox-label__labelLeftWrapper"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" color="#777777" style="color: rgb(119, 119, 119);" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></span>
                                <div class="textbox-label__textboxWrapper">
                                    <div><input type="text" placeholder="Cari lokasi, nama properti atau nama developer" name="" maxlength="255" id="" class="textbox__shape__withoutShadow textbox__shape__disablePadding textbox__color__bg__transparent textbox__color__border__none textbox__color__placeholder__gray" autocomplete="new-password" value=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg w-1/6  flex flex-col text-center items-center mobile:w-full">
                    <div class="flex flex-column mobile:h-10 text-center items-center mt-2 mobile:mt-0 text-[#777777] gap-2 mobile:gap-44 cursor-pointer">Pilih Tipe <img src="https://www.homespot.id/icons/small-icons/arrow-down-new.svg" alt="arrow-down"></div>
                </div>
                <div class="w-1/6 mobile:w-full mobile:h-10"><button type="button" disabled="" class="group flex items-center justify-center p-0.5 text-center font-medium relative focus:z-10 focus:outline-none cursor-not-allowed opacity-50 text-white border-transparent enabled:hover:bg-cyan-800 focus:ring-cyan-300 dark:bg-cyan-600 dark:enabled:hover:bg-cyan-700 dark:focus:ring-cyan-800 rounded-lg focus:ring-2 w-full h-full border-0 bg-[#1078CA] disabled:bg-[#EAEBEB] disabled:text-[#B5B6B6]"><span class="flex items-center transition-all duration-200 rounded-md text-sm px-4 py-2">Cari</span></button></div>
            </div>
        </div>
    </div>
    <div class="flex flex-row mobile:flex-col w-full h-96 -mt-4 mobile:mb-[15rem] mb-[1rem]">
        <div class="w-1/3 mobile:w-full h-full bg-[#EAF6FFCC] bg-opacity-80 rounded-br-[16px] pr-4 mobile:pr-0 backgroundNearby">
            <div class="pl-12 pr-16 mobile:pr-0  mobile:pl-0">
                <div class="landing-page header-w-nav flex flex-col">
                    <div class="flex flex-col mobile:px-6">
                        <div class="flex mb-4"><img class="mr-2" src="https://www.homespot.id/icons/icon-loc.svg" alt="img">
                            <p class="landing-page header-w-nav__places text-[#666666] text-sm">Surabaya</p>
                        </div>
                        <div class="flex mb-2.5">
                            <h1 class="landing-page font-bold fontsize__medium tab:fontsize__small smallPc:fontsize__small">Properti Baru di Sekitarmu</h1>
                        </div>
                        <div class="flex mb-7 text-[#666666] tab:text-sm smallPc:text-sm">Rekomendasi pilihan kami untukmu. Dari rumah minimalis, ruko strategis, sampai apartemen modern semua tersedia.</div>
                        <div class="flex"><a href="/v2/search?type=nearby&amp;lat=-7.2901520415164045&amp;lng=112.79637085258159" class="landing-page header-w-nav__see-all-blue">Lihat Semua</a><a href="/v2/search?type=nearby&amp;lat=-7.2901520415164045&amp;lng=112.79637085258159" class="flex items-center justify-center"><svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" class="text-blue-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg></a></div>
                    </div>
                    <div class="mobile:flex flex-col mobile:w-full hidden bg-[#EAF6FFCC] bg-opacity-80 pl-4" style="background-image: url(&quot;images/logo city/background-nearby.png&quot;); background-position: right bottom; background-repeat: no-repeat; background-size: auto;">
                        <div class="landing-page city-carousel relative">
                            <div class="sc-ifAKCX bqyzQp">
                                <div class="sc-bdVaJa etbmwA">
                                    <div class="navLeft pointer-events-none tab:left-[86%] smallPc:left-[86%] xxl:left-[92%] ">
                                        <div class="rounded-full w-8 h-8 flex justify-center items-center bg-[#EAEBEB]">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8081 4.19865C16.0666 4.46086 16.0636 4.88296 15.8013 5.14144L9.67713 11.1785C9.21874 11.6303 9.21874 12.3697 9.67713 12.8215L15.8013 18.8586C16.0636 19.117 16.0666 19.5391 15.8081 19.8013C15.5496 20.0636 15.1275 20.0666 14.8653 19.8081L8.7411 13.7711C7.75297 12.797 7.75297 11.203 8.7411 10.2289L14.8653 4.19189C15.1275 3.93342 15.5496 3.93644 15.8081 4.19865Z" fill="#B5B6B6"></path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div class="sc-EHOje bghjHX">
                                    <div cols="3" rows="1" class="sc-bZQynM fhZNSt">
                                        <div cols="3" rows="1" class="sc-gzVnrw bXvhnh">
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM bCyzvV">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/293a95cf-0c27-4807-b46e-0c1dd8748a1d_PRJ%7CPTPAKUWON%7CPAKUWONCITY_0.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/293a95cf-0c27-4807-b46e-0c1dd8748a1d_PRJ%7CPTPAKUWON%7CPAKUWONCITY_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/293a95cf-0c27-4807-b46e-0c1dd8748a1d_PRJ%7CPTPAKUWON%7CPAKUWONCITY_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/293a95cf-0c27-4807-b46e-0c1dd8748a1d_PRJ%7CPTPAKUWON%7CPAKUWONCITY_3.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/293a95cf-0c27-4807-b46e-0c1dd8748a1d_PRJ%7CPTPAKUWON%7CPAKUWONCITY_4.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/293a95cf-0c27-4807-b46e-0c1dd8748a1d_PRJ%7CPTPAKUWON%7CPAKUWONCITY_5.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/293a95cf-0c27-4807-b46e-0c1dd8748a1d_PRJ%7CPTPAKUWON%7CPAKUWONCITY_6.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/7</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Pakuwon City</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">3 KT • 2 KM • LB 55m2 • LT 90m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp1.8 M - Rp5 M</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM bCyzvV">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/41dc00d5-85d6-4a4b-abd4-e82415acc695_PRJ%7CPTPPPPROPERTITBK%7CGRANDDHARMAHUSADALAGOON_0.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/41dc00d5-85d6-4a4b-abd4-e82415acc695_PRJ%7CPTPPPPROPERTITBK%7CGRANDDHARMAHUSADALAGOON_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/41dc00d5-85d6-4a4b-abd4-e82415acc695_PRJ%7CPTPPPPROPERTITBK%7CGRANDDHARMAHUSADALAGOON_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/41dc00d5-85d6-4a4b-abd4-e82415acc695_PRJ%7CPTPPPPROPERTITBK%7CGRANDDHARMAHUSADALAGOON_3.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/41dc00d5-85d6-4a4b-abd4-e82415acc695_PRJ%7CPTPPPPROPERTITBK%7CGRANDDHARMAHUSADALAGOON_4.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/41dc00d5-85d6-4a4b-abd4-e82415acc695_PRJ%7CPTPPPPROPERTITBK%7CGRANDDHARMAHUSADALAGOON_5.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/41dc00d5-85d6-4a4b-abd4-e82415acc695_PRJ%7CPTPPPPROPERTITBK%7CGRANDDHARMAHUSADALAGOON_6.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/7</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Grand Dharmahusada Lagoon</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">1 KT • 1 KM • LB 24m2 • LT 50m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp691.2 Jt - Rp2.1 M</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM fNWxxK">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_0.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_2.png" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg">
                                                                                    <img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_3.png" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_4.png" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_5.png" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_6.png" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/af0ea28c-5efc-440e-8f7c-0a2ee4f8e9cb_PRJ%7CPTGRAHAAGUNGKENCANA%7CWISATASEMANGGI2SURABAYA_7.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/8</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Wisata Semanggi 2 Surabaya</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">2 KT • 1 KM • LB 42m2 • LT 90m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp700 Jt - Rp1.2 M</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div cols="3" rows="1" class="sc-gzVnrw bXvhnh">
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM fFHpVA">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/6b0824e8-0ddd-487a-ac9b-6b4987f63a28_PRJ%7CPTJAWANUSAWAHANA%7CPANTAIMENTARI_0.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/6b0824e8-0ddd-487a-ac9b-6b4987f63a28_PRJ%7CPTJAWANUSAWAHANA%7CPANTAIMENTARI_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/6b0824e8-0ddd-487a-ac9b-6b4987f63a28_PRJ%7CPTJAWANUSAWAHANA%7CPANTAIMENTARI_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/6b0824e8-0ddd-487a-ac9b-6b4987f63a28_PRJ%7CPTJAWANUSAWAHANA%7CPANTAIMENTARI_3.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/6b0824e8-0ddd-487a-ac9b-6b4987f63a28_PRJ%7CPTJAWANUSAWAHANA%7CPANTAIMENTARI_4.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/5</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Pantai Mentari </span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">3 KT • 2 KM • LB 60m2 • LT 120m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp1 M - Rp2.5 M</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM jOsamr">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/1146da01-5350-46de-8ab3-25f49ed85793_PRJ%7CPTGRIYOMAPANSENTOSA%7CCENTRALPARKMERR_0.png" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/1146da01-5350-46de-8ab3-25f49ed85793_PRJ%7CPTGRIYOMAPANSENTOSA%7CCENTRALPARKMERR_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/1146da01-5350-46de-8ab3-25f49ed85793_PRJ%7CPTGRIYOMAPANSENTOSA%7CCENTRALPARKMERR_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/1146da01-5350-46de-8ab3-25f49ed85793_PRJ%7CPTGRIYOMAPANSENTOSA%7CCENTRALPARKMERR_3.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/4</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Central Park Merr</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">3 KT • 2 KM • LB 89m2 • LT 78m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp1.4 M - Rp2 M</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM jOsamr">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/45e5dd3c-7d43-488a-8649-9ad148b8ac91_PRJ%7CPTBANGUNWISMASEJAHTERA%7CSURYAGARDEN2_0.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/45e5dd3c-7d43-488a-8649-9ad148b8ac91_PRJ%7CPTBANGUNWISMASEJAHTERA%7CSURYAGARDEN2_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/45e5dd3c-7d43-488a-8649-9ad148b8ac91_PRJ%7CPTBANGUNWISMASEJAHTERA%7CSURYAGARDEN2_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/45e5dd3c-7d43-488a-8649-9ad148b8ac91_PRJ%7CPTBANGUNWISMASEJAHTERA%7CSURYAGARDEN2_3.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ">
                                                                        <img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/4</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Surya Garden 2</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">2 KT • 1 KM • LB 42m2 • LT 90m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp450 Jt - Rp450 Jt</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div cols="3" rows="1" class="sc-gzVnrw bXvhnh">
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM cOWONI">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/2c1df053-7628-4b5a-ae41-9b46299b70d9_PRJ%7CPTINTIKERTAABADIMAS%7CALAMJUANDA_0.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/2c1df053-7628-4b5a-ae41-9b46299b70d9_PRJ%7CPTINTIKERTAABADIMAS%7CALAMJUANDA_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/2c1df053-7628-4b5a-ae41-9b46299b70d9_PRJ%7CPTINTIKERTAABADIMAS%7CALAMJUANDA_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/2c1df053-7628-4b5a-ae41-9b46299b70d9_PRJ%7CPTINTIKERTAABADIMAS%7CALAMJUANDA_3.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/2c1df053-7628-4b5a-ae41-9b46299b70d9_PRJ%7CPTINTIKERTAABADIMAS%7CALAMJUANDA_4.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/2c1df053-7628-4b5a-ae41-9b46299b70d9_PRJ%7CPTINTIKERTAABADIMAS%7CALAMJUANDA_5.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/6</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Alam Juanda</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">2 KT • 1 KM • LB 42m2 • LT 90m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp450 Jt - Rp700 Jt</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM cOWONI">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/e9590873-cf12-494f-8c25-e273d83a6fd6_PRJ%7CPTSINARBHAKTILUHUR%7CANVAYAJUANDA_0.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/e9590873-cf12-494f-8c25-e273d83a6fd6_PRJ%7CPTSINARBHAKTILUHUR%7CANVAYAJUANDA_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/e9590873-cf12-494f-8c25-e273d83a6fd6_PRJ%7CPTSINARBHAKTILUHUR%7CANVAYAJUANDA_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/e9590873-cf12-494f-8c25-e273d83a6fd6_PRJ%7CPTSINARBHAKTILUHUR%7CANVAYAJUANDA_3.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/e9590873-cf12-494f-8c25-e273d83a6fd6_PRJ%7CPTSINARBHAKTILUHUR%7CANVAYAJUANDA_4.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/e9590873-cf12-494f-8c25-e273d83a6fd6_PRJ%7CPTSINARBHAKTILUHUR%7CANVAYAJUANDA_5.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/6</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Anvaya Juanda</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">2 KT • 2 KM • LB 42m2 • LT 90m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp550 Jt - Rp650 Jt</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM fFHpVA">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/0b203cc8-9b05-4974-a81d-7ad344e9a80d_PRJ%7CPTPUTRAKHAMIMSUADAH%7CTHEOSO_0.jpeg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/0b203cc8-9b05-4974-a81d-7ad344e9a80d_PRJ%7CPTPUTRAKHAMIMSUADAH%7CTHEOSO_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/0b203cc8-9b05-4974-a81d-7ad344e9a80d_PRJ%7CPTPUTRAKHAMIMSUADAH%7CTHEOSO_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/0b203cc8-9b05-4974-a81d-7ad344e9a80d_PRJ%7CPTPUTRAKHAMIMSUADAH%7CTHEOSO_3.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/0b203cc8-9b05-4974-a81d-7ad344e9a80d_PRJ%7CPTPUTRAKHAMIMSUADAH%7CTHEOSO_4.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/5</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">The Oso</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4">
                                                                <span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">2 KT • 1 KM • LB 56m2 • LT 105m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp695 Jt - Rp825 Jt</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div cols="3" rows="1" class="sc-gzVnrw bXvhnh">
                                            <div class="sc-dnqmqq bVoXXg">
                                                <div class="relative h-[346px]">
                                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-center h-80 rounded-t-xl">
                                                        <div class="w-full flex-shrink-0">
                                                            <div class="small-img__wrapper">
                                                                <div class="sc-ifAKCX bqyzQp">
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__left-btn" src="https://www.homespot.id/icons/small-icons/arrow-left-white-circle.svg" alt="left-button"></div>
                                                                    <div class="sc-EHOje fJKSLk">
                                                                        <div cols="1" rows="1" class="sc-bZQynM cOWONI">
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/5b0ade29-7620-45d3-95e7-58997816cb3a_PRJ%7CPTGMJAYAMANDIRI%7CGREENMANSIONBANJARKEMUNING_0.jpeg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/5b0ade29-7620-45d3-95e7-58997816cb3a_PRJ%7CPTGMJAYAMANDIRI%7CGREENMANSIONBANJARKEMUNING_1.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/5b0ade29-7620-45d3-95e7-58997816cb3a_PRJ%7CPTGMJAYAMANDIRI%7CGREENMANSIONBANJARKEMUNING_2.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/5b0ade29-7620-45d3-95e7-58997816cb3a_PRJ%7CPTGMJAYAMANDIRI%7CGREENMANSIONBANJARKEMUNING_3.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/5b0ade29-7620-45d3-95e7-58997816cb3a_PRJ%7CPTGMJAYAMANDIRI%7CGREENMANSIONBANJARKEMUNING_4.jpg" alt="img"></div>
                                                                            </div>
                                                                            <div cols="1" rows="1" class="sc-gzVnrw eMAMVL">
                                                                                <div class="sc-dnqmqq bVoXXg"><img class="small-img__img h-32" src="https://assethomespot.bitcorp.id/homespot-prod/5b0ade29-7620-45d3-95e7-58997816cb3a_PRJ%7CPTGMJAYAMANDIRI%7CGREENMANSIONBANJARKEMUNING_5.jpg" alt="img"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc-bdVaJa ksoYRJ"><img class="small-img is-slideshow__right-btn" src="https://www.homespot.id/icons/small-icons/arrow-right-white-circle.svg" alt="right-button"></div>
                                                                </div>
                                                                <div>
                                                                    <div class="small-img is-slideshow__count-img-wrap">
                                                                        <p class="small-img is-slideshow__count-img">1/6</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cursor-default">
                                                            <div class="flex flex-col flex-grow px-4"><span class="font-semibold text-lg pt-[16px] tab:text-sm smallPc:text-sm overflow-hidden">Green Mansion Banjar Kemuning</span></div>
                                                            <div class="landing-page__custom-box absolute flex flex-col px-4"><span class="text-xs text-[#777777] flex-grow capitalize tab:fontsize__small smallPc:fontsize__small">Jawa Timur</span><span class="text-xs text-[#777777] tab:fontsize__small smallPc:fontsize__small">2 KT • 1 KM • LB 45m2 • LT 72m2 • SHGB</span></div>
                                                            <div class="absolute bottom-12 left-0 right-0 mt-4">
                                                                <div class="flex flex-col"><span class="text-[#1078CA] px-4 font-bold text-sm tab:text-[10px] smallPc:text-[10px] xxl:text-lg">Rp500 Jt - Rp650 Jt</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sc-bdVaJa etbmwA">
                                    <div class="navRight navRight ">
                                        <div class="rounded-full w-8 h-8 flex justify-center items-center bg-[#DDEFFC]"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.19189 19.8013C7.93342 19.5391 7.93644 19.117 8.19865 18.8586L14.3229 12.8215C14.7813 12.3697 14.7813 11.6303 14.3229 11.1785L8.19865 5.14144C7.93644 4.88296 7.93342 4.46086 8.19189 4.19865C8.45037 3.93644 8.87247 3.93342 9.13468 4.1919L15.2589 10.2289C16.247 11.203 16.247 12.797 15.2589 13.7711L9.13468 19.8081C8.87247 20.0666 8.45037 20.0636 8.19189 19.8013Z" fill="#1078CA"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 ">
                    <div class="hidden justify-center items-center overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none bg-black bg-opacity-50">
                        <div class="relative w-[80%] h-auto bg-transparent">
                            <div class="px-4 pb-4 bg-white rounded-lg">
                                <div class="flex items-start justify-between px-5 py-3 border-b mb-4 border-solid border-gray-300 rounded-t">
                                    <div class="place-self-center">
                                        <h1 class="fontcolor__blue fontweight__bold">Pin Lokasi</h1>
                                    </div><button class="bg-transparent border-0 text-black float-right place-self-center"><img src="https://www.homespot.id/icons/Close_Circle.svg" alt="Close Button"></button>
                                </div>
                                <div class="gmapsApps__wrapper">
                                    <div style="width: 100%; height: 100%; margin: 0px; padding: 0px; position: relative;">
                                        <div style="width: 100%; height: 100%; left: 0px; top: 0px; margin: 0px; padding: 0px; position: absolute;">
                                            <div style="height: 100%; width: 100%;">
                                                <div style="overflow: hidden;"></div>
                                            </div>
                                        </div>
                                        <div style="width: 50%; height: 50%; left: 50%; top: 50%; margin: 0px; padding: 0px; position: absolute;">
                                            <div style="width: 100%; height: 100%; left: 0px; top: 0px; margin: 0px; padding: 0px; position: absolute;">
                                                <div style="width: 0px; height: 0px; left: 0px; top: 0px; background-color: transparent; position: absolute;">
                                                    <div>
                                                        <div class="rounded-lg shadow-lg bg-white w-36 absolute -left-[72px] -top-[95px] cursor-pointer">
                                                            <p class="text-black text-[20px] font-semibold text-center px-3 py-2">Pilih Lokasi</p>
                                                        </div>
                                                        <div class="w-10 overflow-hidden inline-block absolute -left-[14.14px] -top-[55px]">
                                                            <div class=" h-5 shadow-lg w-5 bg-white -rotate-45 transform origin-top-left"></div>
                                                        </div><img alt="pin-img" class="w-[40px] h-[40px] absolute -left-[20px] -top-[40px]" src="/images/locator.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div><input type="text" autocomplete="off" role="combobox" aria-autocomplete="list" aria-expanded="false" placeholder="Search Places ..." class="gmapsApps__input--findAddress" value="">
                                        <div class="gmapsApps__input--complited false"></div>
                                    </div><input disabled="" name="" maxlength="255" id="" class="textbox__color__bg__transparent textbox__color__border__gray textbox__color__placeholder__gray gmapsApps__input--getAddress" autocomplete="new-password" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/3 mobile:hidden -ml-6 mobile:ml-1 max-h-96">
            <div class="landing-page city-carousel relative">
                <div id="daftar-property" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Data from /api/properties will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Get data api from /api/properties
const getProperties = async () => {
    // Check kota query string
    const urlParams = new URLSearchParams(window.location.search);
    const kota = urlParams.get('kota');
    let response = null;
    if (kota) {
        response = await fetch(`/api/properties/${kota}`);
    } else {
        response = await fetch('/api/properties');
    }
    const data = await response.json();
    return data;
}

// Load data api to the #daftar-property element
const loadProperties = async () => {
    const properties = await getProperties();
    const daftarProperty = document.getElementById('daftar-property');
    daftarProperty.innerHTML = properties.map(property => {
        return `
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-2">${property.nama}</h2>
                <p class="text-gray-700 mb-4">${property.kota}</p>
                <p class="text-sm text-gray-600">Luas Bangunan ${property.luas_bangunan}m2 • Luas Tanah ${property.luas_tanah}m2</p>
                <p class="text-gray-600">Harga: ${property.harga}</p>
            </div>
        `;
    }).join('');
}

// Load properties when the page is loaded
document.addEventListener('DOMContentLoaded', loadProperties);
</script>
@endpush
