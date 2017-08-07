

@for($tahun_awal_bgt = $tahun_awal_bgt; $tahun_awal_bgt <= $tahun_skr_bgt; $tahun_awal_bgt++)
        <option value="{{ $tahun_skr_bgt }}">{{ $tahun_awal_bgt }}</option>

        <!-- No need for $tahun_awal_bgt++ here, i added in for loop  -->

      @endfor