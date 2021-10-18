<template>
    <div style="min-width: 800px">
        <ep-table-header :titulos="titulos"/>
        <ep-table-body :rows="rows"/>
    </div>
</template>

<script>
    import EpTableHeader from './Header';
    import EpTableBody from './Row';

    export default{
        components: {
            EpTableHeader,
            EpTableBody
        },
        props:[
            'titulos',
            'rows'
        ]
    }
</script>
