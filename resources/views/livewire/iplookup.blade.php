<div>
    <div class="mx-auto mt-2">
        <h2 class="text-white text-2xl text-center mb-3">Laravel Livewire IP Lookup App</h2>
        <div class="flex justify-center">
            <input wire:model.defer="ip" class="bg-gray-700 pl-4 p-2 w-full text-white" type="text" placeholder="Enter IP addres"> 
            <button class="bg-clifford p-2 text-white" wire:click="findIp" wire:loading.disabled>
                Submit
            </button>
          </div>
          @error('ip')
          <div class="bg-red-200 text-red-500 p-1">
              <strong>Error! </strong>{{ $message }}
          </div>
          @enderror
        
    </div>

        <div class="mx-auto mt-2">
        <div class="flex justify-center">
            <div wire:loading>
                <img class="transition-all" width="150" src="{{ asset('/img/loading.gif') }}" alt="">
            </div>
            @if ($results != '')
             <table class="border-separate border border-slate-500 text-white transition-all" wire:loading.remove>
                  <tbody>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">IP</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $ip }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Country Code</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_countryCode'] }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Country</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_countryName'] }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Continent Code</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_continentCode'] }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Continent</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_continentName'] }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Longitude</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_longitude'] }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Latitude</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_latitude'] }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Timezone</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_timezone'] }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Local Time</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ now()->timeZone($results['geoplugin_timezone'])->format('d M, Y H:i:s') }}</td>
                    </tr>
                    <tr>
                      <td class="border border-slate-700 px-5 py-2 ">Currency Symbol</td>
                      <td class="border border-slate-700 px-5 py-2 text-gray-400">{{ $results['geoplugin_currencySymbol_UTF8'] }}</td>
                    </tr>
                    
                </tbody>
            </table>
            @endif
        </div>
    </div>
    
</div>
