<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Dompdf\Dompdf;

class ClientController extends Controller {

  /**
   * @Route("/institutional", name="institutional") 
   */
  public function institutionalAction(Request $request) {
    $fileUrl = null;
    $formInstitutiona = $this->createFormBuilder()
            ->add('company_name', TextType::class, ['label' => 'Nazwa firmy', 'attr' => ['placeholder' => 'Wpisz nazwę firmy']])
            ->add('company_phone', TextType::class, ['label' => 'Telefon', 'attr' => ['placeholder' => 'Wpisz numer telefonu']])
            ->add('company_mail', TextType::class, ['label' => 'E-mail', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            //ADRES 
            ->add('street', TextType::class, ['label' => 'Ulica', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            ->add('street_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer budynku']])
            ->add('flat_number', TextType::class, ['label' => 'Number lokalu', 'attr' => ['placeholder' => 'Wpisz numer lokalu']])
            ->add('post_code', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['placeholder' => 'Wpisz kod pocztowy']])
            ->add('city', TextType::class, ['label' => 'Miejscowość', 'attr' => ['placeholder' => 'Wpisz nazwę miejscowości']])
            ->add('other_cor', CheckboxType::class, array(
                'label'    => 'Inny adres korespondencyjny',
                'required' => false,
            ))
            //ADRES KORESPONDENCYJNY
            ->add('cor_street', TextType::class, ['label' => 'Ulica', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            ->add('cor_street_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer budynku']])
            ->add('cor_flat_number', TextType::class, ['label' => 'Number lokalu', 'attr' => ['placeholder' => 'Wpisz numer lokalu']])
            ->add('cor_post_code', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['placeholder' => 'Wpisz kod pocztowy']])
            ->add('cor_city', TextType::class, ['label' => 'Miejscowość', 'attr' => ['placeholder' => 'Wpisz miejscowość']])
            //DANE FIRMY
            ->add('nip', TextType::class, ['label' => 'Numer NIP', 'attr' => ['placeholder' => 'Wpisz numer NIP']])
            ->add('krs', TextType::class, ['label' => 'Numer KRS', 'attr' => ['placeholder' => 'Wpisz numer KRS']])
            ->add('company_country_check', ChoiceType::class, array(
                'choices' => array(
                    'Polska' => 1,
                    'Inny' => 2,
                ),
                'label' => 'Kraj założenia',
                'multiple' => false,
                'expanded' => true,
                'required' => true
            ))
            ->add('company_country', TextType::class, ['label' => 'Kraj', 'attr' => ['placeholder' => 'Wpisz kraj założenia']])
            ->add('company_number', TextType::class, ['label' => 'Numer i nazwa rejestru', 'attr' => ['placeholder' => 'Wpisz numer i nazwę rejestru']])
            ->add('legal_status', ChoiceType::class, array(
                'choices' => array(
                    "spółka cywilna" => 1,
                    "spółka jawna" => 2,
                    "spółka partnerska" => 3,
                    "spółka komandytowa" => 4,
                    "spółka komandytowo-akcyjna" => 5,
                    "spółka z o.o." => 6,
                    "spółka z o.o. w organizacji" => 7,
                    "spółka akcyjna" => 8,
                    "S.A. w organizacji" => 9,
                    "spółdzielnia" => 10,
                    "przedsiębiorstwo państwowe" => 11,
                    "towarzystwo ubezpieczeń wzajemnych" => 12,
                    "stowarzyszenie" => 13,
                    "fundacja" => 14,
                    "organizacja społeczna i zawodowa" => 15,
                    "przedsiębiorstwo zagraniczne" => 16,
                    "oddział lub przedstawicielstwo przedsiębiorcy zagranicznego działającego na terytorium Polski" => 17,
                    "inne" => 18,
                ),
                'label' => 'Status prawny',
                'multiple' => false,
                'expanded' => true,
                'required' => true
            ))
            ->add('legal_status_name', TextType::class, ['label' => 'Status prawny nazwa', 'attr' => ['placeholder' => 'Wpisz status prawny']])
            ->add('currency_status', ChoiceType::class, array(
                'choices' => array(
                    'rezydent (Polska)' => 1,
                    'nierezydent' => 2,
                ),
                'label' => 'Status dewizowy',
                'multiple' => false,
                'expanded' => true,
                'required' => true
            ))
            ->add('currency_country', TextType::class, ['label' => 'Kraj rezydencji podatkowej', 'attr' => ['placeholder' => 'Wpisz rezydencji podatkowej']])
            //BANK
            ->add('bank_name', TextType::class, ['label' => 'Nazwa banku', 'attr' => ['placeholder' => 'Wpisz nazwę banku']])
            ->add('account_number', TextType::class, ['label' => 'Numer rachunku bankowego', 'attr' => ['placeholder' => 'Wpisz numer rachunku']])
            ->add('amount', TextType::class, ['label' => 'Kwota', 'attr' => ['placeholder' => 'Wpisz kwotę']])
            ->add('charge', TextType::class, ['label' => 'Opłata dystrybucyjna (%)', 'attr' => ['placeholder' => 'Wpisz opłatę dystrybucyjną']])
            //DANE PRZEDSTAWICIELA FIRMY
            ->add('representative_name', TextType::class, ['label' => 'Imię, nazwisko', 'attr' => ['placeholder' => 'Wpisz imię i nazwisko']])
            ->add('representative_phone', TextType::class, ['label' => 'Telefon', 'attr' => ['placeholder' => 'Wpisz numer telefonu']])
            ->add('representative_mail', TextType::class, ['label' => 'E-mail', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            ->add('representative_pesel', TextType::class, ['label' => 'PESEL', 'attr' => ['placeholder' => 'Wpisz PESEL']])
            ->add('representative_id_number', TextType::class, ['label' => 'Numer i seria dowodu osobistego', 'attr' => ['placeholder' => 'Wpisz numer dowodu']])
            ->add('representative_nationality', TextType::class, ['label' => 'Obywatelstwo', 'attr' => ['placeholder' => 'Wpisz obywatelstwo']])
            ->add('representative_passport', TextType::class, ['label' => 'Numer paszportu', 'attr' => ['placeholder' => 'Wpisz numer paszportu']])
            //DANE DORADCY
            ->add('counselor_name', TextType::class, ['label' => 'Imię, nazwisko', 'attr' => ['placeholder' => 'Wpisz Imię i nazwisko']])
            ->add('counselor_phone', TextType::class, ['label' => 'Telefon', 'attr' => ['placeholder' => 'Wpisz numer telefonu']])
            ->add('counselor_email', TextType::class, ['label' => 'E-mail', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            ->add('counselor_company', TextType::class, ['label' => 'Firma', 'attr' => ['placeholder' => 'Wpisz nazwę firmy']])
            ->add('counselor_street', TextType::class, ['label' => 'Ulica', 'attr' => ['placeholder' => 'Wpisz ulicę']])
            ->add('counselor_street_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer budynku']])
            ->add('counselor_flat_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer lokalu']])
            ->add('counselor_post_code', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['placeholder' => 'Wpisz kod pocztowy']])
            ->add('counselor_city', TextType::class, ['label' => 'Miejscowość', 'attr' => ['placeholder' => 'Wpisz nazwę miejscowości']])
            ->add('save', SubmitType::class, array('label' => 'Dalej', "attr" => ['class' => 'btn-fill btn-fill--next']))
            ->getForm(); 
    $formInstitutiona->handleRequest($request);

    if ($formInstitutiona->isSubmitted() && $formInstitutiona->isValid()) {
      $data = $formInstitutiona->getData();
      $fileUrl = $this->createPdf($data);
    }

    return $this->render('pages/institutional.html.twig', [
                'form_institutional' => $formInstitutiona->createView(),
                'fileurl' => $fileUrl
    ]);
  }

  /**
   * @Route("/individual", name="individual")
   */
  public function individualAction(Request $request) {
    $fileUrl = null;
    $formIndividual = $this->createFormBuilder()
            ->add('name', TextType::class, ['label' => 'Imię, nazwisko', 'attr' => ['placeholder' => 'Wpisz imię i nazwisko']])
            ->add('phone', TextType::class, ['label' => 'Telefon', 'attr' => ['placeholder' => 'Wpisz numer telefonu']])
            ->add('mail', TextType::class, ['label' => 'E-mail', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            //ADRES 
            ->add('street', TextType::class, ['label' => 'Ulica', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            ->add('street_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer budynku']])
            ->add('flat_number', TextType::class, ['label' => 'Number lokalu', 'attr' => ['placeholder' => 'Wpisz numer lokalu']])
            ->add('post_code', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['placeholder' => 'Wpisz kod pocztowy']])
            ->add('city', TextType::class, ['label' => 'Miejscowość', 'attr' => ['placeholder' => 'Wpisz nazwę miejscowości']])
            ->add('other_cor', CheckboxType::class, array(
                'label'    => 'Inny adres korespondencyjny',
                'required' => false,
            ))
             //ADRES KORESPONDENCYJNY
            ->add('cor_street', TextType::class, ['label' => 'Ulica', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            ->add('cor_street_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer budynku']])
            ->add('cor_flat_number', TextType::class, ['label' => 'Number lokalu', 'attr' => ['placeholder' => 'Wpisz numer lokalu']])
            ->add('cor_post_code', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['placeholder' => 'Wpisz kod pocztowy']])
            ->add('cor_city', TextType::class, ['label' => 'Miejscowość', 'attr' => ['placeholder' => 'Wpisz miejscowość']])
            //DANE
            ->add('id_number', TextType::class, ['label' => 'Numer i seria dowodu osobistego', 'attr' => ['placeholder' => 'Wpisz numer dowodu']])
            ->add('id_expiration', TextType::class, ['label' => 'Data ważności dowodu osobistego', 'attr' => ['placeholder' => 'Wpisz datę ważności dowodu']])
            ->add('nationality', TextType::class, ['label' => 'Obywatelstwo', 'attr' => ['placeholder' => 'Wpisz obywatelstwo']])
            ->add('pesel', TextType::class, ['label' => 'PESEL', 'attr' => ['placeholder' => 'Wpisz PESEL']])
            ->add('birth_date', TextType::class, ['label' => 'Data urodzenia', 'attr' => ['placeholder' => 'Wpisz datę urodzenia']])
            ->add('birth_country', TextType::class, ['label' => 'Kraj urodzenia', 'attr' => ['placeholder' => 'Wpisz kraj urodzenia']])
            //CHECKBOXY
            ->add('legal_status', ChoiceType::class, array(
                'choices' => array(
                    'osoba fizyczna' => 1,
                    'osoba fizyczna prowadząca działalność gospodarczą' => 2,
                    'osoba fizyczna wykonująca wolny zawód' => 3,
                ),
                'label' => 'Status prawny',
                'multiple' => false,
                'expanded' => true,
                'required' => true
            ))
            ->add('currency_status', ChoiceType::class, array(
                'choices' => array(
                    'rezydent (Polska)' => 1,
                    'nierezydent' => 2,
                ),
                'label' => 'Status dewizowy',
                'multiple' => false,
                'expanded' => true,
                'required' => true
            ))
            ->add('facta_status', ChoiceType::class, array(
                'choices' => array(
                    'NIE jest podatnikiem USA (brak rezydencji USA)' => 1,
                    'JEST podatnikiem USA' => 2,
                ),
                'label' => 'Status FACTA',
                'multiple' => false,
                'expanded' => true,
                'required' => true
            ))
            ->add('currency_country', TextType::class, ['label' => 'Kraj rezydencji podatkowej', 'attr' => ['placeholder' => 'Wpisz rezydencji podatkowej']])
            //BANK
            ->add('tin_number', TextType::class, ['label' => 'Number TIN', 'attr' => ['placeholder' => 'Wpisz numer TIN']])
            ->add('bank_name', TextType::class, ['label' => 'Nazwa banku', 'attr' => ['placeholder' => 'Wpisz nazwę banku']])
            ->add('account_number', TextType::class, ['label' => 'Numer rachunku bankowego', 'attr' => ['placeholder' => 'Wpisz numer rachunku']])
            ->add('amount', TextType::class, ['label' => 'Kwota', 'attr' => ['placeholder' => 'Wpisz kwotę']])
            ->add('charge', TextType::class, ['label' => 'Opłata dystrybucyjna (%)', 'attr' => ['placeholder' => 'Wpisz opłatę dystrybucyjną']])
            //DANE DORADCY
            ->add('counselor_name', TextType::class, ['label' => 'Imię, nazwisko', 'attr' => ['placeholder' => 'Wpisz Imię i nazwisko']])
            ->add('counselor_phone', TextType::class, ['label' => 'Telefon', 'attr' => ['placeholder' => 'Wpisz numer telefonu']])
            ->add('counselor_email', TextType::class, ['label' => 'E-mail', 'attr' => ['placeholder' => 'Wpisz adres e-mail']])
            ->add('counselor_company', TextType::class, ['label' => 'Firma', 'attr' => ['placeholder' => 'Wpisz nazwę firmy']])
            ->add('counselor_street', TextType::class, ['label' => 'Ulica', 'attr' => ['placeholder' => 'Wpisz ulicę']])
            ->add('counselor_street_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer budynku']])
            ->add('counselor_flat_number', TextType::class, ['label' => 'Numer budynku', 'attr' => ['placeholder' => 'Wpisz numer lokalu']])
            ->add('counselor_post_code', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['placeholder' => 'Wpisz kod pocztowy']])
            ->add('counselor_city', TextType::class, ['label' => 'Miejscowość', 'attr' => ['placeholder' => 'Wpisz nazwę miejscowości']])
            ->add('save', SubmitType::class, array('label' => 'Dalej', "attr" => ['class' => 'btn-fill btn-fill--next']))
            ->getForm();

    $formIndividual->handleRequest($request);

    if ($formIndividual->isSubmitted() && $formIndividual->isValid()) {

      $data = $formIndividual->getData();
      $fileUrl = $this->createPdf($data);
    }
    return $this->render('pages/individual.html.twig', [
                'form_individual' => $formIndividual->createView(),
                'fileurl' => $fileUrl
    ]); 
  }

  /**
   * @Route("/business-terms", name="business-terms")
   */
  public function businessTermsAction(Request $request) {
    return $this->render('pages/business-terms.html.twig', [
    ]);
  }

  /**
   * @Route("/individual-terms", name="individual-terms")
   */
  public function individualTermsAction(Request $request) {
    return $this->render('pages/individual-terms.html.twig', [
    ]);
  }

  public function createPdf($data) {
    $dompdf = new Dompdf();
    $dompdf->loadHtml(
            "<html>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <style>
      body { font-family: DejaVu Sans, sans-serif; }
      h1{ font-size: 16px; text-align: center; margin-bottom: 25px;}
      p{ font-size: 11px; text-align: justify;}
      .page{page-break-after: always;} 
      .list, .sign{ padding:0 25px;}
      .footer{ font-size: 10px; padding-top: 15px; }
    </style>
    <title>" . $data['name'] . "</title>" .
            "</head>" .
            "<body>" .
            "<div class='page'>" .
            "<h1>ZGODA NA PRZETWARZANIE DANYCH OSOBOWYCH PRZEZ<br>SATURN TFI S.A.</h1>" .
            "<p>Ja niżej podpisany/a <strong>" . $data['name'] . "</strong>, wyrażam zgodę na przetwarzanie moich danych osobowych przez SATURN TFI S.A.                   z siedzibą w Warszawie, ul. Krasińskiego 2A, zgodnie z ustawą z dnia 29.08.1997 r.                       o ochronie danych osobowych [t.j. Dz.U. z 2016 r., poz. 922 ze zm.] w celu składania        przez SATURN TFI S.A. imiennych propozycji nabycia instrumentów finansowych oraz świadczenia innych usług przez SATURN TFI S.A., za wyjątkiem ofert wymagających przetwarzania danych dla celów marketingowych.</p>" .
            "<br>
          <div class='list'>
          <p>          
          <strong>1. Imię i nazwisko:</strong><br>" . $data['name'] . "<br><br>
          <strong>2. PESEL:</strong><br>" . $data['pesel'] . "<br><br>
          <strong>3. Seria i numer dokumentu tożsamości:</strong><br>" . $data['id_number'] . "<br><br>
          <strong>4. Numer telefonu:</strong><br>" . $data['phone'] . "<br><br>
          <strong>5. Adres e-mail:</strong><br>" . $data['mail'] . "<br><br> 
          <strong>6. Adres zameldowania:</strong><br>" . $data['street'] . " " . $data['street_number'] . "/" . $data['flat_number'] . ", " . $data['post_code'] . " " . $data['city'] . ".<br><br> 
          <strong>7. Adres zamieszkania:</strong><br>" . $data['cor_street'] . " " . $data['cor_street_number'] . "/" . $data['cor_flat_number'] . ", " . $data['cor_post_code'] . " " . $data['cor_city'] . ".<br><br>
          <strong>8. Adres do korespondencji:</strong><br>?!<br><br>" .
            "</p>
          </div>" .
            "<br>" .
            "<p>Oświadczam, że zostałam/-em poinformowana/-y o tym, iż podanie danych osobowych jest dobrowolne oraz o przysługującym mi prawie dostępu do treści moich danych osobowych, do ich poprawiania i kontroli oraz prawie do żądania ich usunięcia z bazy, w której zostały zgromadzone. Wyrażam zgodę na przesyłanie mi informacji handlowej za pomocą środków komunikacji elektronicznej, w szczególności poczty elektronicznej. Obowiązek wyrażenia powyższej zgody wynika z treści art. 10 ustawy z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną (t.j. Dz. U. z 2016 r., poz. 1030 ze zm.).</p>" .
            "<div class='sign'>" .
            "<p>Data: " . date("d/m/Y") . " roku</p><br>" .
            "<p>........................................................................</p>" .
            "<p>Czytelny podpis [Imię i nazwisko]</p>" .
            "</div>" .
            "<p class='footer'><strong>UWAGA:</strong> Osoba wyrażająca niniejszą zgodę powinna przesłać ją na adres:<br>
            - SATURN TFI S.A ul. Krasińskiego 2A, 01-601 Warszawa oraz dof@saturntfi.pl.</p>" .
            "</div>" .
            "<div class='page'>" .
            "<h1>ZGODA NA PRZETWARZANIE DANYCH OSOBOWYCH</h1>" .
            "<p>Ja niżej podpisany/a <strong>" . $data['name'] . "</strong>, wyrażam zgodę na przetwarzanie moich danych osobowych przez MURAPOL HRE Spółka z ograniczoną odpowiedzialnością z siedzibą w Warszawie, wpisaną do rejestru przedsiębiorców pod nr KRS: 668053 [dalej jako: „MURAPOL HRE”], zgodnie z ustawą z dnia 29 sierpnia 1997 roku o ochronie danych osobowych [tekst jedn. Dz. U. z 2016 r., poz. 922 ze zm.] w celu składania przez MURAPOL HRE imiennych propozycji nabycia instrumentów finansowych i świadczenia przez MURAPOL HRE innych usług oraz przesyłania na podane przeze mnie adresy informacji o ofercie i produktach MURAPOL HRE, w tym informacji handlowych w formie broszur, pism lub innych druków oraz w celach marketingowych MURAPOL HRE. Ponadto zgodnie z ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną [Dz. U. Nr 144, poz. 1204 ze zm.] oświadczam, iż wyrażam zgodę na przesyłanie na podany przeze mnie adres poczty elektronicznej informacji handlowych kierowanych do mnie przez MURAPOL HRE drogą elektroniczną.
          Przetwarzanie danych, o których mowa powyżej będzie odbywać się w następującym zakresie:</p>" .
            "<br>
          <div class='list'>
          <p>          
          <strong>1. Imię i nazwisko:</strong><br>" . $data['name'] . "<br><br>
          <strong>2. PESEL:</strong><br>" . $data['pesel'] . "<br><br>
          <strong>3. Seria i numer dokumentu tożsamości:</strong><br>" . $data['id_number'] . "<br><br>
          <strong>4. Numer telefonu:</strong><br>" . $data['phone'] . "<br><br>
          <strong>5. Adres e-mail:</strong><br>" . $data['mail'] . "<br><br> 
          <strong>6. Adres zameldowania:</strong><br>" . $data['street'] . " " . $data['street_number'] . "/" . $data['flat_number'] . ", " . $data['post_code'] . " " . $data['city'] . ".<br><br> 
          <strong>7. Adres zamieszkania:</strong><br>" . $data['cor_street'] . " " . $data['cor_street_number'] . "/" . $data['cor_flat_number'] . ", " . $data['cor_post_code'] . " " . $data['cor_city'] . ".<br><br>
          <strong>8. Adres do korespondencji:</strong><br>?!<br><br>" .
            "</p>
          </div>" .
            "<br>" .
            "<p>Oświadczam, że zostałam/-em poinformowana/-y o adresie siedziby i pełnej nazwie administratora danych, o tym, iż podanie danych osobowych jest dobrowolne oraz o przysługującymi mi prawie dostępu do treści moich danych osobowych, do ich poprawiania i kontroli oraz prawie do żądania ich usunięcia z bazy, w której zostały zgromadzone.</p>" .
            "<div class='sign'>" .
            "<p>Data: " . date("d/m/Y") . " roku</p><br>" .
            "<p>........................................................................</p>" .
            "<p>Czytelny podpis [Imię i nazwisko]</p>" .
            "</div>" .
            "<p class='footer'>Osoba wyrażająca niniejszą zgodę powinna ją przesłać na adres: <br>
            MURAPOL HRE SP. Z O.O. ul. Śniadeckich 10, 00-656 Warszawa oraz zgłoszenie@murapolhre.pl</p>" .
            "</div>" .
            "</body>" .
            "</html>"
    );
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents('files/' . $data['pesel'] . '.pdf', $output);
    $fileUrl = 'files/' . $data['pesel'] . '.pdf';
    return $fileUrl;
  }

}
