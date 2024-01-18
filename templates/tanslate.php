<script>
if ($('#langSelect').val() === 'fr') {
    $('.en').addClass('hidden')
    $('.fr').removeClass('hidden')

  } else {
    $('.fr').addClass('hidden')
    $('.en').removeClass('hidden')

  }
  $('#langSelect').change(() => {
    if ($('#langSelect').val() === 'fr') {
      $('.en').addClass('hidden')
      $('.fr').removeClass('hidden')

    } else {
      $('.fr').addClass('hidden')
      $('.en').removeClass('hidden')

    }
  })
</script>
