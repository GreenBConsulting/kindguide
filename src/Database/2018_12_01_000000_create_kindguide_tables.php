<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-migration.blade.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KGCreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
    	Schema::create('KG_Business', function(Blueprint $table)
		{
			$table->increments('BusID');
			$table->integer('BusUserID')->unsigned()->nullable();
			$table->integer('BusSubmissionProgress')->nullable();
			$table->integer('BusStatus')->unsigned()->default('323')->nullable();
			$table->boolean('BusIsTest')->default('0')->nullable();
			$table->string('BusName')->nullable();
			$table->string('BusNameAlt')->nullable();
			$table->string('BusState')->nullable();
			$table->string('BusZipCode')->nullable();
			$table->integer('BusESG')->unsigned()->nullable();
			$table->char('BusOrganic', 1)->nullable();
			$table->char('BusFairTrade', 1)->nullable();
			$table->char('BusCleanGreen', 1)->nullable();
			$table->string('BusFirstName')->nullable();
			$table->string('BusLastName')->nullable();
			$table->string('BusTitle')->nullable();
			$table->string('BusEmail')->nullable();
			$table->boolean('BusMultipleStates')->nullable();
			$table->string('BusPhone')->nullable();
			$table->string('BusSectorOther')->nullable();
			$table->char('BusKnowCsr', 1)->nullable();
			$table->char('BusKnowEs', 1)->nullable();
			$table->char('BusKnowEsgReporting', 1)->nullable();
			$table->char('BusInvestorAskEs', 1)->nullable();
			$table->char('BusInvestorAskCsr', 1)->nullable();
			$table->char('BusRequiredCsr', 1)->nullable();
			$table->char('BusRequiredEsp', 1)->nullable();
			$table->char('BusCurrentCsr', 1)->nullable();
			$table->string('BusCurrentCsrOther')->nullable();
			$table->char('BusCurrentCsrProgram', 1)->nullable();
			$table->integer('BusCurrentCsrStaffTime')->unsigned()->nullable();
			$table->char('BusCurrentEs', 1)->nullable();
			$table->integer('BusCurrentEsStaffTime')->unsigned()->nullable();
			$table->char('BusPublic', 1)->nullable();
			$table->char('BusPublicFeatured', 1)->nullable();
			$table->char('BusKnowCc', 1)->nullable();
			$table->string('BusEsOther')->nullable();
			$table->char('BusFreeSupport', 1)->nullable();
			$table->string('BusIPaddy')->nullable();
			$table->string('BusIsMobile')->nullable();
			$table->string('BusUniqueStr')->nullable();
			$table->string('BusTreeVersion')->nullable();
			$table->string('BusVersionAB')->nullable();
			$table->longText('BusFeedback1')->nullable();
			$table->longText('BusFeedback2')->nullable();
			$table->longText('BusFeedback3')->nullable();
			$table->longText('BusFeedback4')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_Nonprofit', function(Blueprint $table)
		{
			$table->increments('NonID');
			$table->integer('NonUserID')->unsigned()->nullable();
			$table->string('NonName')->nullable();
			$table->string('NonWebsite')->nullable();
			$table->integer('NonTaxStatus')->unsigned()->nullable();
			$table->char('NonIsEmployee', 1)->nullable();
			$table->string('NonEmail')->nullable();
			$table->string('NonVersionAB')->nullable();
			$table->integer('NonSubmissionProgress')->nullable();
			$table->string('NonIPaddy')->nullable();
			$table->string('NonTreeVersion')->nullable();
			$table->string('NonUniqueStr')->nullable();
			$table->string('NonIsMobile')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessSectors', function(Blueprint $table)
		{
			$table->increments('BusSectID');
			$table->integer('BusSectBusID')->unsigned()->nullable();
			$table->integer('BusSectSector')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessStates', function(Blueprint $table)
		{
			$table->increments('BusStatID');
			$table->integer('BusStatBusID')->unsigned()->nullable();
			$table->string('BusStatState', 2)->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessCSR', function(Blueprint $table)
		{
			$table->increments('BusCsrID');
			$table->integer('BusCsrBusID')->unsigned()->nullable();
			$table->integer('BusCsrPractice')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessNotCSR', function(Blueprint $table)
		{
			$table->increments('BusCsrNotID');
			$table->integer('BusCsrNotBusID')->unsigned()->nullable();
			$table->integer('BusCsrNotReason')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessES', function(Blueprint $table)
		{
			$table->increments('BusEsID');
			$table->integer('BusEsBusID')->unsigned()->nullable();
			$table->integer('BusEsPractice')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessNotES', function(Blueprint $table)
		{
			$table->increments('BusEsNotID');
			$table->integer('BusEsNotBusID')->unsigned()->nullable();
			$table->integer('BusEsNotReason')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessTagLinks', function(Blueprint $table)
		{
			$table->increments('BusTagLnkID');
			$table->integer('BusTagLnkBusID')->unsigned()->nullable();
			$table->integer('BusTagLnkTagID')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessTags', function(Blueprint $table)
		{
			$table->increments('BusTagID');
			$table->string('BusTagName')->nullable();
			$table->longText('BusTagDescription')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_BusinessInvites', function(Blueprint $table)
		{
			$table->increments('BusInvID');
			$table->integer('BusInvBusinessID')->unsigned()->nullable();
			$table->integer('BusInvUserID')->unsigned()->nullable();
			$table->string('BusInvName')->nullable();
			$table->string('BusInvLocation')->nullable();
			$table->char('BusInvIsCustomer', 1)->nullable();
			$table->longText('BusInvContact')->nullable();
			$table->longText('BusInvNotes')->nullable();
			$table->integer('BusInvSubmissionProgress')->nullable();
			$table->string('BusInvIPaddy')->nullable();
			$table->string('BusInvVersionAB')->nullable();
			$table->string('BusInvTreeVersion')->nullable();
			$table->string('BusInvUniqueStr')->nullable();
			$table->string('BusInvIsMobile')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerSurvey', function(Blueprint $table)
		{
			$table->increments('ConID');
			$table->integer('ConUserID')->unsigned()->nullable();
			$table->string('ConEmail')->nullable();
			$table->integer('ConStatus')->unsigned()->nullable();
			$table->string('ConVersionAB')->nullable();
			$table->integer('ConSubmissionProgress')->nullable();
			$table->string('ConIPaddy')->nullable();
			$table->string('ConTreeVersion')->nullable();
			$table->string('ConUniqueStr')->nullable();
			$table->string('ConAreYouConsumer')->nullable();
			$table->string('ConAreYouConsumerOther')->nullable();
			$table->integer('ConHowOften')->unsigned()->nullable();
			$table->string('ConWhatKindsOther')->nullable();
			$table->string('ConYouNotice')->nullable();
			$table->string('ConOftenSustainable')->nullable();
			$table->integer('ConBusCommitment')->nullable();
			$table->string('ConKnowMore')->nullable();
			$table->string('ConSpendMore')->nullable();
			$table->string('ConIssuesMatter')->nullable();
			$table->string('ConGender')->nullable();
			$table->string('ConStudent')->nullable();
			$table->string('ConEmployed')->nullable();
			$table->longText('ConMeaning')->nullable();
			$table->integer('ConWords')->unsigned()->nullable();
			$table->string('ConWordsDefine')->nullable();
			$table->string('ConZip', 10)->nullable();
			$table->integer('ConAge')->unsigned()->nullable();
			$table->char('ConDemographic', 1)->nullable();
			$table->integer('ConEducation')->unsigned()->nullable();
			$table->char('ConFestival', 1)->nullable();
			$table->char('ConTradeShow', 1)->nullable();
			$table->char('ConSupportLobbied', 1)->nullable();
			$table->char('ConIndustryEver', 1)->nullable();
			$table->char('ConBiology', 1)->nullable();
			$table->char('ConBiologyBody', 1)->nullable();
			$table->char('ConHistory', 1)->nullable();
			$table->char('ConSupportDonate', 1)->nullable();
			$table->char('ConInterned', 1)->nullable();
			$table->char('ConUseIntroduce', 1)->nullable();
			$table->char('ConDisabilityCommunity', 1)->nullable();
			$table->char('ConKnowCc', 1)->nullable();
			$table->char('ConKnowCsr', 1)->nullable();
			$table->char('ConKnowEs', 1)->nullable();
			$table->char('ConBiologyEndo', 1)->nullable();
			$table->char('ConEventGreen', 1)->nullable();
			$table->char('ConEventAccessibile', 1)->nullable();
			$table->char('ConInternPaid', 1)->nullable();
			$table->char('ConIdentityPersonal', 1)->nullable();
			$table->char('ConIdentityPolitical', 1)->nullable();
			$table->char('ConIdentitySocial', 1)->nullable();
			$table->char('ConCommunity', 1)->nullable();
			$table->char('ConUseNature', 1)->nullable();
			$table->char('ConUseSocial', 1)->nullable();
			$table->char('ConUseFamily', 1)->nullable();
			$table->char('ConEventVolunteer', 1)->nullable();
			$table->char('ConSupportVolunteer', 1)->nullable();
			$table->char('ConIndustryWork', 1)->nullable();
			$table->char('ConAccessibilityImpacts', 1)->nullable();
			$table->longText('ConAccessibilityHow')->nullable();
			$table->char('ConParent', 1)->nullable();
			$table->char('ConParentOfAdult', 1)->nullable();
			$table->char('ConParentConsumer', 1)->nullable();
			$table->integer('ConLklyProductBudtend')->unsigned()->nullable();
			$table->integer('ConLklyPurchaseAskExpert')->unsigned()->nullable();
			$table->integer('ConLklyPurchaseAsk')->unsigned()->nullable();
			$table->integer('ConLklyPurchaseAskNone')->unsigned()->nullable();
			$table->integer('ConLklyBrandBoycott')->unsigned()->nullable();
			$table->integer('ConOftenBrandAdCsr')->unsigned()->nullable();
			$table->integer('ConOftenBrandPracticeCsr')->unsigned()->nullable();
			$table->integer('ConOftenBrandsResponsible')->unsigned()->nullable();
			$table->integer('ConLklyPurchaseNew')->unsigned()->nullable();
			$table->integer('ConLklyProductCeleb')->unsigned()->nullable();
			$table->integer('ConLklyProductNonprofit')->unsigned()->nullable();
			$table->integer('ConImpCertOrganic')->unsigned()->nullable();
			$table->integer('ConImpLeadership')->unsigned()->nullable();
			$table->integer('ConOftenClasses')->unsigned()->nullable();
			$table->integer('ConImpCoops')->unsigned()->nullable();
			$table->integer('ConImpCommunityEngage')->unsigned()->nullable();
			$table->integer('ConLklyPurchaseMarketing')->unsigned()->nullable();
			$table->integer('ConImpService')->unsigned()->nullable();
			$table->integer('ConOftenDispensVapeRec')->unsigned()->nullable();
			$table->integer('ConOftenDispensEvents')->unsigned()->nullable();
			$table->integer('ConOftenDispensCompassion')->unsigned()->nullable();
			$table->integer('ConImpDonateCharity')->unsigned()->nullable();
			$table->integer('ConImpDonateLocal')->unsigned()->nullable();
			$table->integer('ConImpEmployees')->unsigned()->nullable();
			$table->integer('ConLklyBrandTellBoycott')->unsigned()->nullable();
			$table->integer('ConImpEngagesAll')->unsigned()->nullable();
			$table->integer('ConImpEvidenceCsr')->unsigned()->nullable();
			$table->integer('ConImpEvidenceEs')->unsigned()->nullable();
			$table->integer('ConImpFairLabor')->unsigned()->nullable();
			$table->integer('ConImpFairEvidence')->unsigned()->nullable();
			$table->integer('ConImpHireIncarcerated')->unsigned()->nullable();
			$table->integer('ConImpIndustryHowLong')->unsigned()->nullable();
			$table->integer('ConImpPolicyHowLong')->unsigned()->nullable();
			$table->integer('ConLklyInvestigateCsr')->unsigned()->nullable();
			$table->integer('ConImpLocalOwned')->unsigned()->nullable();
			$table->integer('ConLklyBrandsEco')->unsigned()->nullable();
			$table->integer('ConImpMarketingCsr')->unsigned()->nullable();
			$table->integer('ConImpMarketingEco')->unsigned()->nullable();
			$table->integer('ConImpTradeMember')->unsigned()->nullable();
			$table->integer('ConImpProductOrganic')->unsigned()->nullable();
			$table->integer('ConOftenProducts')->unsigned()->nullable();
			$table->integer('ConImpAnnualBenefit')->unsigned()->nullable();
			$table->integer('ConLklyPurchaseCsr')->unsigned()->nullable();
			$table->integer('ConLklyBrandShare')->unsigned()->nullable();
			$table->integer('ConImpSocialBus')->unsigned()->nullable();
			$table->integer('ConLklyDispensBrowse')->unsigned()->nullable();
			$table->integer('ConImpLocalEvents')->unsigned()->nullable();
			$table->integer('ConImpStaffTimeRespons')->unsigned()->nullable();
			$table->integer('ConLklyBrandRespons')->unsigned()->nullable();
			$table->integer('ConImpSupportNonprofits')->unsigned()->nullable();
			$table->integer('ConOftenPackaging')->unsigned()->nullable();
			$table->integer('ConLklyBrandsTellBad')->unsigned()->nullable();
			$table->integer('ConLklyBrandsTellGood')->unsigned()->nullable();
			$table->integer('ConLklyDispensCsr')->unsigned()->nullable();
			$table->string('ConIsMobile')->nullable();
			$table->char('ConEventVolunContact', 1)->nullable();
			$table->longText('ConFeedback1')->nullable();
			$table->longText('ConFeedback2')->nullable();
			$table->longText('ConFeedback3')->nullable();
			$table->longText('ConFeedback4')->nullable();
			$table->longText('ConFeedback5')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerUse', function(Blueprint $table)
		{
			$table->increments('ConUseID');
			$table->integer('ConUseConID')->unsigned()->nullable();
			$table->integer('ConUseUseID')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerAccess', function(Blueprint $table)
		{
			$table->increments('ComAccID');
			$table->integer('ComAccConID')->unsigned()->nullable();
			$table->integer('ComAccAccess')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerPurchase', function(Blueprint $table)
		{
			$table->increments('ConPurchID');
			$table->integer('ConPurchConID')->unsigned()->nullable();
			$table->integer('ConPurchWhatKinds')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerIssues', function(Blueprint $table)
		{
			$table->increments('ConIsuID');
			$table->integer('ConIsuConID')->unsigned()->nullable();
			$table->integer('ConIsuIssuesMatter')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerRoles', function(Blueprint $table)
		{
			$table->increments('ConRolsID');
			$table->integer('ConRolsConID')->unsigned()->nullable();
			$table->integer('ConRolsRole')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerSectors', function(Blueprint $table)
		{
			$table->increments('ConSectID');
			$table->integer('ConSectConID')->unsigned()->nullable();
			$table->integer('ConSectSector')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerCertifications', function(Blueprint $table)
		{
			$table->increments('ConCertID');
			$table->integer('ConCertConID')->unsigned()->nullable();
			$table->integer('ConCertCertification')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerAdvocates', function(Blueprint $table)
		{
			$table->increments('ConAdvID');
			$table->integer('ConAdvConID')->unsigned()->nullable();
			$table->integer('ConAdvAdvocate')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ConsumerBrand', function(Blueprint $table)
		{
			$table->increments('ConBrnID');
			$table->integer('ConBrnConID')->unsigned()->nullable();
			$table->integer('ConBrnFamiliarize')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_Book', function(Blueprint $table)
		{
			$table->increments('BookID');
			$table->string('BookVersionAB')->nullable();
			$table->string('BookName')->nullable();
			$table->integer('BookSubmissionProgress')->nullable();
			$table->string('BookIPaddy')->nullable();
			$table->string('BookTreeVersion')->nullable();
			$table->string('BookUniqueStr')->nullable();
			$table->integer('BookUserID')->unsigned()->nullable();
			$table->string('BookIsMobile')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_Items', function(Blueprint $table)
		{
			$table->increments('ItID');
			$table->integer('ItBookID')->unsigned()->nullable();
			$table->integer('ItItemType')->unsigned()->nullable();
			$table->string('ItName')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_Tags', function(Blueprint $table)
		{
			$table->increments('TagID');
			$table->integer('TagItemID')->unsigned()->nullable();
			$table->integer('TagType')->unsigned()->nullable();
			$table->string('TagName')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_Externalities', function(Blueprint $table)
		{
			$table->increments('ExternID');
			$table->integer('ExternItemID')->unsigned()->nullable();
			$table->integer('ExternType')->unsigned()->nullable();
			$table->double('ExternMeasure')->nullable();
			$table->integer('ExternUnit')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ExternTypes', function(Blueprint $table)
		{
			$table->increments('ExtTypID');
			$table->string('ExtTypTypeName')->nullable();
			$table->boolean('ExtTypHasWatts')->nullable();
			$table->boolean('ExtTypHasBTUs')->nullable();
			$table->boolean('ExtTypHasCarbon')->nullable();
			$table->boolean('ExtTypHasGreenhouse')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_ExternConvert', function(Blueprint $table)
		{
			$table->increments('ExtConID');
			$table->integer('ExtConType1')->unsigned()->nullable();
			$table->integer('ExtConType2')->unsigned()->nullable();
			$table->integer('ExtConType1Measure')->nullable();
			$table->integer('ExtConType2Measure')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_Units', function(Blueprint $table)
		{
			$table->increments('UnitID');
			$table->integer('UnitExternType')->unsigned()->nullable();
			$table->boolean('UnitIsDefault')->nullable();
			$table->string('UnitName')->nullable();
			$table->timestamps();
		});
		Schema::create('KG_UnitsConvert', function(Blueprint $table)
		{
			$table->increments('UnitConID');
			$table->double('UnitConType2Measure')->nullable();
			$table->integer('UnitConType2')->unsigned()->nullable();
			$table->timestamps();
		});
	
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
    	Schema::drop('KG_Business');
		Schema::drop('KG_Nonprofit');
		Schema::drop('KG_BusinessSectors');
		Schema::drop('KG_BusinessStates');
		Schema::drop('KG_BusinessCSR');
		Schema::drop('KG_BusinessNotCSR');
		Schema::drop('KG_BusinessES');
		Schema::drop('KG_BusinessNotES');
		Schema::drop('KG_BusinessTagLinks');
		Schema::drop('KG_BusinessTags');
		Schema::drop('KG_BusinessInvites');
		Schema::drop('KG_ConsumerSurvey');
		Schema::drop('KG_ConsumerUse');
		Schema::drop('KG_ConsumerAccess');
		Schema::drop('KG_ConsumerPurchase');
		Schema::drop('KG_ConsumerIssues');
		Schema::drop('KG_ConsumerRoles');
		Schema::drop('KG_ConsumerSectors');
		Schema::drop('KG_ConsumerCertifications');
		Schema::drop('KG_ConsumerAdvocates');
		Schema::drop('KG_ConsumerBrand');
		Schema::drop('KG_Book');
		Schema::drop('KG_Items');
		Schema::drop('KG_Tags');
		Schema::drop('KG_Externalities');
		Schema::drop('KG_ExternTypes');
		Schema::drop('KG_ExternConvert');
		Schema::drop('KG_Units');
		Schema::drop('KG_UnitsConvert');
	
    }
}
