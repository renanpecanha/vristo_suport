<div class="theme-dropdown relative" x-data="{ columnDropdown: false }" @click.outside="columnDropdown = false">
    <a href="javascript:;" class="flex items-center border font-semibold border-[#e0e6ed] dark:border-[#253b5c] rounded-md px-4 py-2 text-sm dark:bg-[#1b2e4b] dark:text-white-dark " @click="columnDropdown = ! columnDropdown">
        <span class="ltr:mr-1 rtl:ml-1">Colunas</span>
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </a>
    <div class="ltr:left-0 rtl:right-0 top-11 rounded hidden absolute min-w-[150px] bg-white py-2 z-[10] text-dark dark:text-white-light dark:bg-[#1b2e4b] shadow w-[100px]" :class="columnDropdown && '!block'">
        <ul class="font-semibold px-4 space-y-2">
            <template x-for="(col,i) in columns" :key="i">
                <li>
                    <div>
                        <label class="cursor-pointer">
                            <input type="checkbox" class="form-checkbox" :id="`chk-${i}`" :value="(i)" @change="col.hidden=  $event.target.checked,showHideColumns(i,$event.target.checked)" :checked="col.hidden" />
                            <span :for="`chk-${i}`" class="ltr:ml-2 rtl:mr-2" x-text="col.name"></span>
                        </label>
                    </div>
                </li>
            </template>
        </ul>
    </div>
</div>
