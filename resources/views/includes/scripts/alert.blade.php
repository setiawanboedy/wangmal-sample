<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('refreshAsbab', (event) => {
            
            $('#addAsbabModal').modal('hide');
            $('#updateAsbabModal').modal('hide');
            Swal.fire({
                title: event.data['title'],
                text: event.data['text'],
                icon: event.data['icon'],
                confirmButtonText: 'Ok'
            })
        });
    });
</script>
<script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('asbab-delete', (event) => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Kamu tidak akan bisa mengembalikannya!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#179978',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('confirm-delete', [event.id]);

                }
            })
        });
    });
</script>
<script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('refreshAsbab', (event) => {
            Swal.fire({
                title: event.data['title'],
                text: event.data['text'],
                icon: event.data['icon'],
                confirmButtonText: 'Ok'
            })
        });
    });
</script>