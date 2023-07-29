<div class="flex flex-wrap -mx-3 mt-16">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>All user</h6>
                <p>Here you can manage user.</p>
            </div>
            {{-- <div>
            <input type="search"wire:model="search"
            class="
            inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85"
        placeholder="recherche"/>
        </div> --}}


     <div class="flex justify-center">
  <input type="search" placeholder="Search"wire:model="search" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
  <button  style="background-color: blue; color: white;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Search
</div>

           
            @if(Auth::user()->isAdmin())
                <div class="my-auto ml-auto pr-6">
                  
                        <a href="{{ route('inscription') }}">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
                        </a>
                      
              
            @endif
        </div>

        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                    <tr>
                        <th
                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            ID</th>
                        {{-- <th
                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Photo</th> --}}

                        <th
                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Email
                        </th>
                        <th
                            class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Fonction
                        </th>
                        <th
                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Role
                        </th>
                        <th
                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Heures mois
                        </th>
                        <th
                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Creation Date
                        </th>
                        @if(Auth::user()->isAdmin())
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Action
                            </th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $value)
                        <tr>
                            <td
                                class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->id }}</p>
                            </td>
                            {{--
                                                            <td
                                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                                <div class="flex px-4 py-1">
                                                                    <div class="flex flex-col justify-center">
                                                                        <img src="../assets/img/team-1.jpg"
                                                                            class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-size-sm h-9 w-9 rounded-xl"
                                                                            alt="user1" />
                                                                    </div>
                                                                </div>
                                                            </td> --}}

                            <td
                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->name}}</p>
                            </td>
                            <td
                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->email }}</p>
                            </td>
                            <td
                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs"> {{ $value->fonction }}</p>
                            </td>

                            {{-- <td
                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-size-xs"></p>
                        </td> --}}
                            <td
                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->role->nom }}</p>
                            </td>

                            <td
                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->current_month_pointage }}</p>
                            </td>

                            <td
                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->created_at->format ('d/m/y') }}</p>
                            </td>
                            @if(Auth::user()->isAdmin())
                            
                                <td  class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                   

                                    <p class="mb-0 font-semibold leading-tight text-base">
                                        <a href="{{route('edit-user',$value->id)}}"onclick="confirm('Are you sure you want to updated the emploi') || event.stopImmediatePropagation()"> 
                                             <i class="fas fa-edit"></i></a>
                                            <a href="#" onclick="confirm('Are you sure you want to remove the user') || event.stopImmediatePropagation()"
                                            wire:click.after="delete({{$value->id}})">
    
                                              <i class="cursor-pointer fas fa-trash" aria-hidden="true"></i>
										
											 
                                         </a>
                                    </p>
                                </td>

                            @endif
                        </tr>
                    @endforeach
                    </tbody>

                </table>
	
            </div>
            {{ $users->links() }}
        </div>
		</div>
			<button class="fixed bottom-0 bg-blue-500 text-white p-4 rounded-full shadow-lg">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M10 16a1 1 0 01-.707-.293l-5-5a1 1 0 111.414-1.414L10 13.586l4.293-4.293a1 1 0 111.414 1.414l-5 5A1 1 0 0110 16z" clip-rule="evenodd" />
    <path fill-rule="evenodd" d="M10 4a1 1 0 01.707.293l5 5a1 1 0 01-1.414 1.414L10 6.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5A1 1 0 0110 4z" clip-rule="evenodd" />
</svg>
</button>
</div>
    </div>
	
</div>

<div class="flex flex-wrap -mx-3 mt-16">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>All pointages</h6>
                <p>Here you can manage pointages.</p>
				
            </div>
            {{-- 
                <input type="search"wire:model="search"
                class="p-6 pb-0 mb-0 bg-white border-b0 border-b-solid rounded-t-2xl border-b-transparent"
                placeholder="recherche"/>
        --}}
	   
	   
     <div class="flex justify-center">
		<a class="btn btn-primary" href="{{ URL::to('pdf') }}">
<i class="cursor-pointer fas fa-print fa-bounce fa-2xl" width="293" height="230"style="color: #2962c3;"aria-hidden="true"></i>
<i class="cursor-pointer fas fa-fingerprint fa-bounce fa-2xl" width="293" height="230"style="color: #2962c3;"aria-hidden="true"></i>


</i></a>
		  </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                        <tr>
						
                            <th
                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                ID</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                NAME</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                SIGNATURE</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                HEURE ARRIVEE</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                HEURE DEPART </th>

                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                              total-HEURE</th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Creation Date</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($pointages as $value)
                            <tr>
                                <td
                                    class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->id }}</p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->User->name }}</p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->signature }}</p>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{$value->heure_A}}</p>
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs"> {{$value->heure_D}}</p>
                                </td>
                                {{-- <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs"> {{$value->scopeCurrentMonthPointage}}</p>
                                </td> --}}

                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">
                                        {{ $value->timing }}
                                    </p>
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-size-xs">{{ $value->created_at->format('d/m/y')}}</p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{-- {{ $pointages->links() }} --}}
	
                </div>
									<button class="fixed bottom-0 bg-blue-500 text-white p-4 rounded-full shadow-lg">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M10 16a1 1 0 01-.707-.293l-5-5a1 1 0 111.414-1.414L10 13.586l4.293-4.293a1 1 0 111.414 1.414l-5 5A1 1 0 0110 16z" clip-rule="evenodd" />
    <path fill-rule="evenodd" d="M10 4a1 1 0 01.707.293l5 5a1 1 0 01-1.414 1.414L10 6.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5A1 1 0 0110 4z" clip-rule="evenodd" />
</svg>
</button>
            </div>
        </div>
    </div>

</div>
