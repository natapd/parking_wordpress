<?php /* Template Name: Тарифы */ ?>


<section id="price" class="price">
    <div class="price__wrapper">
      <h2 class="price__header section-title">Тарифы</h2>
      <table class="price__list">
        <tr>
          
          <td class="price__title-type">Тип авто</td>
          <td class="price__title-value">Месяц</td>
          <td class="price__title-value">Неделя</td>
          <td class="price__title-value">Сутки</td>
        </tr>
        <tr>
          <td class="price__type">легковые</td>
          <td class="price__value"><?php the_field('month_car',62); ?></td>
          <td class="price__value"><?php the_field('week_car',62); ?></td>
          <td class="price__value"><?php the_field('day_car',62); ?><sup>*</sup></td>
        </tr>
        <tr>
          <td class="price__type">грузовые</td>
          <td class="price__value"><?php the_field('month_truck',62); ?></td>
          <td class="price__value"><?php the_field('week_truck',62); ?></td>
          <td class="price__value"><?php the_field('day_truck',62); ?></td>
        </tr>
        <tr>
          <td class="price__type">грузовые свыше 9м</td>
          <td class="price__value"><?php the_field('month_9',62); ?></td>
          <td class="price__value"><?php the_field('week_9',62); ?></td>
          <td class="price__value"><?php the_field('day_9',62); ?></td>
        </tr>
      </table>
      <small class="price__legend">
      <sup>*</sup> — 50р в час (свыше трех часов -150р)
      </small>
    </div>
  </section>
  